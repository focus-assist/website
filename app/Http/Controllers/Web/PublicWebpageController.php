<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicWebpageController extends Controller
{
    public function showHomepage(): View
    {
        return view( 'pages.public.index' );
    }

    public function showServicesPage(): View
    {
        return view( 'pages.public.services' );
    }

    public function showProductsPage(): View
    {
        return view( 'pages.public.products' );
    }

    public function showAboutPage(): View
    {
        return view( 'pages.public.about' );
    }

    public function showBlogFeedPage(): View
    {
        return view( 'pages.public.blog.feed' );
    }

    public function showBlogPostPage(): View
    {
        return view( 'pages.public.blog.post' );
    }

    public function showContactPage(): View
    {
        return view( 'pages.public.contact' );
    }

    public function showAccessibilityStatementPage(): View
    {
        return view( 'pages.public.accessibility-statement' );
    }

    public function showPrivacyPolicyPage(): View
    {
        return view( 'pages.public.privacy-policy' );
    }

    public function showTermsOfServicePage(): View
    {
        return view( 'pages.public.terms-of-service' );
    }
}
