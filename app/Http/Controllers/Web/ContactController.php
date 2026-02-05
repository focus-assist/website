<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * The email address to send contact form submissions to.
     * In production, this should come from config or environment.
     */
    protected string $recipientEmail = 'hello@focus-assist.us';

    /**
     * Display the contact page with a fresh CAPTCHA.
     */
    public function show(): View
    {
        $captcha = $this->generateCaptcha();

        return view('pages.public.contact', [
            'captchaQuestion' => $captcha['question'],
            'captchaToken' => $captcha['token'],
        ]);
    }

    /**
     * Handle contact form submission.
     */
    public function submit(Request $request): RedirectResponse
    {
        // Validate the form data
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'topic' => ['required', 'string', 'in:vista-opus,libri-res,diarium-salus,agile-transformation,agile-coaching,product-management,project-management,scrum-masters,accessibility,general,random'],
            'message' => ['required', 'string', 'max:5000'],
            'captcha_token' => ['required', 'string'],
            'captcha_answer' => ['required', 'string'],
        ]);

        // Verify CAPTCHA
        if (!$this->verifyCaptcha($validated['captcha_token'], $validated['captcha_answer'])) {
            return back()
                ->withInput()
                ->withErrors(['captcha_answer' => 'Incorrect answer. Please try again.']);
        }

        // Prepare form data for the email
        $formData = [
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'company' => $validated['company'] ?? 'Not provided',
            'topic' => $this->formatTopic($validated['topic']),
            'topic_slug' => $validated['topic'],
            'message' => $validated['message'],
            'submitted_at' => now()->format('F j, Y \a\t g:i A T'),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ];

        // Send the email
        Mail::to($this->recipientEmail)->send(new ContactFormSubmission($formData));

        return back()->with('success', 'Thank you for your message! We\'ll get back to you within 1 business day.');
    }

    /**
     * Generate a new CAPTCHA for AJAX refresh.
     */
    public function refreshCaptcha(): JsonResponse
    {
        $captcha = $this->generateCaptcha();

        return response()->json([
            'question' => $captcha['question'],
            'token' => $captcha['token'],
        ]);
    }

    /**
     * Generate a simple math CAPTCHA.
     */
    protected function generateCaptcha(): array
    {
        $operations = ['+', '-', '×'];
        $operation = $operations[array_rand($operations)];

        // Generate numbers based on operation to avoid negative results
        switch ($operation) {
            case '+':
                $num1 = rand(1, 10);
                $num2 = rand(1, 10);
                $answer = $num1 + $num2;
                break;
            case '-':
                $num1 = rand(5, 15);
                $num2 = rand(1, $num1); // Ensure positive result
                $answer = $num1 - $num2;
                break;
            case '×':
                $num1 = rand(2, 9);
                $num2 = rand(2, 9);
                $answer = $num1 * $num2;
                break;
            default:
                $num1 = rand(1, 10);
                $num2 = rand(1, 10);
                $answer = $num1 + $num2;
        }

        $question = "What is {$num1} {$operation} {$num2}?";
        $token = Str::random(32);

        // Store the answer in cache for 10 minutes
        Cache::put("captcha_{$token}", $answer, now()->addMinutes(10));

        return [
            'question' => $question,
            'token' => $token,
            'answer' => $answer,
        ];
    }

    /**
     * Verify CAPTCHA answer.
     */
    protected function verifyCaptcha(string $token, string $answer): bool
    {
        $storedAnswer = Cache::pull("captcha_{$token}");

        if ($storedAnswer === null) {
            return false;
        }

        return (int) $answer === (int) $storedAnswer;
    }

    /**
     * Format topic slug to human-readable text.
     */
    protected function formatTopic(string $slug): string
    {
        $topics = [
            'vista-opus' => 'Vista Opus',
            'libri-res' => 'Libri Res',
            'diarium-salus' => 'Diarium Salus',
            'agile-transformation' => 'Agile Transformation',
            'agile-coaching' => 'Agile Coaching',
            'product-management' => 'Product Management',
            'project-management' => 'Project Management',
            'scrum-masters' => 'Scrum Masters',
            'accessibility' => 'Accessibility',
            'general' => 'General Inquiry',
            'random' => 'Random / Other',
        ];

        return $topics[$slug] ?? ucwords(str_replace('-', ' ', $slug));
    }
}
