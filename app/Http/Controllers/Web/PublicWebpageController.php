<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\BlogService;
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

    public function showBlogFeedPage(Request $request): View
    {
        $category = $request->query('category');
        $posts = BlogService::GetPublishedPosts(perPage: 9, category: $category);
        $featuredPost = BlogService::GetFeaturedPost();
        $categories = BlogService::GetCategories();

        return view( 'pages.public.blog.feed', [
            'posts' => $posts,
            'featuredPost' => $featuredPost,
            'categories' => $categories,
            'currentCategory' => $category,
        ]);
    }

    public function showBlogPostPage(string $post): View
    {
        $blogPost = BlogService::GetPostBySlug($post);

        if (!$blogPost) {
            abort(404);
        }

        $relatedPosts = BlogService::GetRelatedPosts($blogPost->getModel(), limit: 3);

        return view( 'pages.public.blog.post', [
            'post' => $blogPost,
            'relatedPosts' => $relatedPosts,
        ]);
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
