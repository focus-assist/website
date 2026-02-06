<?php

namespace App\Services;

use Illuminate\Support\Str;

class WebMarkdownService
{
    /**
     * Convert Markdown to HTML.
     */
    public static function MarkdownToHtml(string $markdown): string
    {
        $html = $markdown;

        // Escape HTML entities first (for security)
        // But preserve markdown syntax
        $html = htmlspecialchars($html, ENT_NOQUOTES, 'UTF-8');

        // Convert code blocks (must be done before other conversions)
        $html = preg_replace_callback('/```(\w+)?\n(.*?)```/s', function ($matches) {
            $language = $matches[1] ?? '';
            $code = htmlspecialchars_decode($matches[2]);
            $code = htmlspecialchars($code, ENT_QUOTES, 'UTF-8');
            $langAttr = $language ? " data-language=\"{$language}\"" : '';
            return "<pre{$langAttr}><code>" . trim($code) . "</code></pre>";
        }, $html);

        // Convert inline code
        $html = preg_replace('/`([^`]+)`/', '<code>$1</code>', $html);

        // Convert blockquotes
        $html = preg_replace_callback('/^>\s*(.+)$/m', function ($matches) {
            return '<blockquote><p>' . trim($matches[1]) . '</p></blockquote>';
        }, $html);

        // Merge consecutive blockquotes
        $html = preg_replace('/<\/blockquote>\s*<blockquote>/s', "\n", $html);

        // Convert headers (h1-h6)
        $html = preg_replace('/^######\s*(.+)$/m', '<h6>$1</h6>', $html);
        $html = preg_replace('/^#####\s*(.+)$/m', '<h5>$1</h5>', $html);
        $html = preg_replace('/^####\s*(.+)$/m', '<h4>$1</h4>', $html);
        $html = preg_replace('/^###\s*(.+)$/m', '<h3>$1</h3>', $html);
        $html = preg_replace('/^##\s*(.+)$/m', '<h2>$1</h2>', $html);
        $html = preg_replace('/^#\s*(.+)$/m', '<h1>$1</h1>', $html);

        // Convert bold text (must be before italic)
        $html = preg_replace('/\*\*(.+?)\*\*/s', '<strong>$1</strong>', $html);
        $html = preg_replace('/__(.+?)__/s', '<strong>$1</strong>', $html);

        // Convert italic text
        $html = preg_replace('/\*(.+?)\*/s', '<em>$1</em>', $html);
        $html = preg_replace('/_(.+?)_/s', '<em>$1</em>', $html);

        // Convert links
        $html = preg_replace('/\[([^\]]+)\]\(([^)]+)\)/', '<a href="$2">$1</a>', $html);

        // Convert images
        $html = preg_replace('/!\[([^\]]*)\]\(([^)]+)\)/', '<img src="$2" alt="$1" loading="lazy">', $html);

        // Convert unordered lists
        $html = preg_replace_callback('/^[\-\*]\s+(.+)$/m', function ($matches) {
            return '<li>' . trim($matches[1]) . '</li>';
        }, $html);

        // Wrap consecutive list items in ul
        $html = preg_replace('/(<li>.*<\/li>\n?)+/s', '<ul>$0</ul>', $html);

        // Convert ordered lists
        $html = preg_replace_callback('/^\d+\.\s+(.+)$/m', function ($matches) {
            return '<oli>' . trim($matches[1]) . '</oli>';
        }, $html);

        // Wrap consecutive ordered list items in ol
        $html = preg_replace('/(<oli>.*<\/oli>\n?)+/s', '<ol>$0</ol>', $html);
        $html = str_replace(['<oli>', '</oli>'], ['<li>', '</li>'], $html);

        // Convert horizontal rules
        $html = preg_replace('/^[\-\*\_]{3,}$/m', '<hr>', $html);

        // Convert paragraphs (lines that aren't already wrapped in HTML tags)
        $lines = explode("\n", $html);
        $result = [];
        $inParagraph = false;
        $paragraphContent = '';

        foreach ($lines as $line) {
            $trimmedLine = trim($line);

            // Skip empty lines
            if (empty($trimmedLine)) {
                if ($inParagraph && !empty($paragraphContent)) {
                    $result[] = '<p>' . trim($paragraphContent) . '</p>';
                    $paragraphContent = '';
                    $inParagraph = false;
                }
                continue;
            }

            // Check if line is already an HTML block element
            if (preg_match('/^<(h[1-6]|p|ul|ol|li|blockquote|pre|hr|div|table|img)/', $trimmedLine)) {
                if ($inParagraph && !empty($paragraphContent)) {
                    $result[] = '<p>' . trim($paragraphContent) . '</p>';
                    $paragraphContent = '';
                    $inParagraph = false;
                }
                $result[] = $trimmedLine;
            } else {
                $inParagraph = true;
                $paragraphContent .= ($paragraphContent ? ' ' : '') . $trimmedLine;
            }
        }

        // Close any remaining paragraph
        if ($inParagraph && !empty($paragraphContent)) {
            $result[] = '<p>' . trim($paragraphContent) . '</p>';
        }

        $html = implode("\n", $result);

        // Clean up extra whitespace
        $html = preg_replace('/\n{3,}/', "\n\n", $html);

        return trim($html);
    }

    /**
     * Convert HTML to Markdown.
     */
    public static function HtmlToMarkdown(string $html): string
    {
        $markdown = $html;

        // Convert headers
        $markdown = preg_replace('/<h1[^>]*>(.*?)<\/h1>/si', "# $1\n\n", $markdown);
        $markdown = preg_replace('/<h2[^>]*>(.*?)<\/h2>/si', "## $1\n\n", $markdown);
        $markdown = preg_replace('/<h3[^>]*>(.*?)<\/h3>/si', "### $1\n\n", $markdown);
        $markdown = preg_replace('/<h4[^>]*>(.*?)<\/h4>/si', "#### $1\n\n", $markdown);
        $markdown = preg_replace('/<h5[^>]*>(.*?)<\/h5>/si', "##### $1\n\n", $markdown);
        $markdown = preg_replace('/<h6[^>]*>(.*?)<\/h6>/si', "###### $1\n\n", $markdown);

        // Convert paragraphs
        $markdown = preg_replace('/<p[^>]*>(.*?)<\/p>/si', "$1\n\n", $markdown);

        // Convert bold
        $markdown = preg_replace('/<strong[^>]*>(.*?)<\/strong>/si', '**$1**', $markdown);
        $markdown = preg_replace('/<b[^>]*>(.*?)<\/b>/si', '**$1**', $markdown);

        // Convert italic
        $markdown = preg_replace('/<em[^>]*>(.*?)<\/em>/si', '*$1*', $markdown);
        $markdown = preg_replace('/<i[^>]*>(.*?)<\/i>/si', '*$1*', $markdown);

        // Convert links
        $markdown = preg_replace('/<a[^>]*href=["\']([^"\']+)["\'][^>]*>(.*?)<\/a>/si', '[$2]($1)', $markdown);

        // Convert images
        $markdown = preg_replace('/<img[^>]*src=["\']([^"\']+)["\'][^>]*alt=["\']([^"\']*)["\'][^>]*\/?>/si', '![$2]($1)', $markdown);
        $markdown = preg_replace('/<img[^>]*alt=["\']([^"\']*)["\'][^>]*src=["\']([^"\']+)["\'][^>]*\/?>/si', '![$1]($2)', $markdown);

        // Convert code blocks
        $markdown = preg_replace_callback('/<pre[^>]*data-language=["\'](\w+)["\'][^>]*><code>(.*?)<\/code><\/pre>/si', function ($matches) {
            return "```{$matches[1]}\n" . html_entity_decode($matches[2]) . "\n```\n\n";
        }, $markdown);
        $markdown = preg_replace_callback('/<pre[^>]*><code>(.*?)<\/code><\/pre>/si', function ($matches) {
            return "```\n" . html_entity_decode($matches[1]) . "\n```\n\n";
        }, $markdown);

        // Convert inline code
        $markdown = preg_replace('/<code[^>]*>(.*?)<\/code>/si', '`$1`', $markdown);

        // Convert blockquotes
        $markdown = preg_replace_callback('/<blockquote[^>]*>(.*?)<\/blockquote>/si', function ($matches) {
            $content = strip_tags($matches[1]);
            $lines = explode("\n", trim($content));
            return implode("\n", array_map(fn($line) => "> " . trim($line), $lines)) . "\n\n";
        }, $markdown);

        // Convert unordered lists
        $markdown = preg_replace_callback('/<ul[^>]*>(.*?)<\/ul>/si', function ($matches) {
            $items = preg_replace('/<li[^>]*>(.*?)<\/li>/si', "- $1\n", $matches[1]);
            return $items . "\n";
        }, $markdown);

        // Convert ordered lists
        $markdown = preg_replace_callback('/<ol[^>]*>(.*?)<\/ol>/si', function ($matches) {
            $counter = 0;
            $items = preg_replace_callback('/<li[^>]*>(.*?)<\/li>/si', function ($m) use (&$counter) {
                $counter++;
                return "{$counter}. {$m[1]}\n";
            }, $matches[1]);
            return $items . "\n";
        }, $markdown);

        // Convert horizontal rules
        $markdown = preg_replace('/<hr[^>]*\/?>/si', "---\n\n", $markdown);

        // Convert line breaks
        $markdown = preg_replace('/<br[^>]*\/?>/si', "\n", $markdown);

        // Strip remaining HTML tags
        $markdown = strip_tags($markdown);

        // Decode HTML entities
        $markdown = html_entity_decode($markdown, ENT_QUOTES, 'UTF-8');

        // Clean up excessive whitespace
        $markdown = preg_replace('/\n{3,}/', "\n\n", $markdown);

        return trim($markdown);
    }

    /**
     * Calculate estimated read time in minutes.
     */
    public static function CalculateReadTime(string $content): int
    {
        $wordCount = str_word_count(strip_tags($content));
        return max(1, (int) ceil($wordCount / 200));
    }

    /**
     * Generate a URL-friendly slug from text.
     */
    public static function GenerateSlug(string $text): string
    {
        return Str::slug($text);
    }
}
