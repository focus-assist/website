<?php

namespace App\Services;

use App\Http\Resources\BlogResource;
use App\Http\Resources\BlogResourceCollection;
use App\Models\Blog;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class BlogService
{
    /**
     * Get paginated published blog posts.
     */
    public static function GetPublishedPosts(int $perPage = 9, ?string $category = null): BlogResourceCollection
    {
        $query = Blog::published()->latest();

        if ($category) {
            $query->inCategory($category);
        }

        $posts = $query->paginate($perPage);

        return new BlogResourceCollection($posts);
    }

    /**
     * Get the featured post (most recent featured, or most recent if none featured).
     */
    public static function GetFeaturedPost(): ?BlogResource
    {
        $post = Blog::published()
            ->featured()
            ->latest()
            ->first();

        if (!$post) {
            $post = Blog::published()->latest()->first();
        }

        return $post ? new BlogResource($post) : null;
    }

    /**
     * Get a single blog post by slug.
     */
    public static function GetPostBySlug(string $slug): ?BlogResource
    {
        $post = Blog::where('slug', $slug)
            ->published()
            ->first();

        return $post ? new BlogResource($post) : null;
    }

    /**
     * Get a single blog post by ID.
     */
    public static function GetPostById(int $id): ?BlogResource
    {
        $post = Blog::find($id);

        return $post ? new BlogResource($post) : null;
    }

    /**
     * Get related posts based on category.
     */
    public static function GetRelatedPosts(Blog $currentPost, int $limit = 3): BlogResourceCollection
    {
        $posts = Blog::published()
            ->where('id', '!=', $currentPost->id)
            ->inCategory($currentPost->category_slug)
            ->latest()
            ->limit($limit)
            ->get();

        // If not enough posts in same category, fill with other posts
        if ($posts->count() < $limit) {
            $additionalPosts = Blog::published()
                ->where('id', '!=', $currentPost->id)
                ->whereNotIn('id', $posts->pluck('id'))
                ->latest()
                ->limit($limit - $posts->count())
                ->get();

            $posts = $posts->concat($additionalPosts);
        }

        return new BlogResourceCollection($posts);
    }

    /**
     * Get recent posts.
     */
    public static function GetRecentPosts(int $limit = 5): BlogResourceCollection
    {
        $posts = Blog::published()
            ->latest()
            ->limit($limit)
            ->get();

        return new BlogResourceCollection($posts);
    }

    /**
     * Create a new blog post.
     */
    public static function CreatePost(array $data): BlogResource
    {
        // Generate HTML from Markdown
        if (isset($data['content_markdown'])) {
            $data['content_html'] = WebMarkdownService::MarkdownToHtml($data['content_markdown']);
        }

        // Generate slug if not provided
        if (!isset($data['slug']) && isset($data['title'])) {
            $data['slug'] = WebMarkdownService::GenerateSlug($data['title']);
        }

        // Calculate read time
        if (isset($data['content_html'])) {
            $data['read_time_minutes'] = WebMarkdownService::CalculateReadTime($data['content_html']);
        }

        // Generate category slug if not provided
        if (!isset($data['category_slug']) && isset($data['category'])) {
            $data['category_slug'] = WebMarkdownService::GenerateSlug($data['category']);
        }

        $post = Blog::create($data);

        return new BlogResource($post);
    }

    /**
     * Update an existing blog post.
     */
    public static function UpdatePost(Blog $post, array $data): BlogResource
    {
        // Regenerate HTML if Markdown changed
        if (isset($data['content_markdown'])) {
            $data['content_html'] = WebMarkdownService::MarkdownToHtml($data['content_markdown']);
            $data['read_time_minutes'] = WebMarkdownService::CalculateReadTime($data['content_html']);
        }

        // Regenerate category slug if category changed
        if (isset($data['category']) && !isset($data['category_slug'])) {
            $data['category_slug'] = WebMarkdownService::GenerateSlug($data['category']);
        }

        $post->update($data);

        return new BlogResource($post->fresh());
    }

    /**
     * Delete a blog post.
     */
    public static function DeletePost(Blog $post): bool
    {
        return $post->delete();
    }

    /**
     * Convert a Blog model to JSON string.
     */
    public static function ToJson(Blog $post): string
    {
        return json_encode([
            'id' => $post->id,
            'slug' => $post->slug,
            'title' => $post->title,
            'excerpt' => $post->excerpt,
            'content_markdown' => $post->content_markdown,
            'content_html' => $post->content_html,
            'category' => $post->category,
            'category_slug' => $post->category_slug,
            'featured_image' => $post->featured_image,
            'featured_image_alt' => $post->featured_image_alt,
            'author' => $post->author,
            'read_time_minutes' => $post->read_time_minutes,
            'is_featured' => $post->is_featured,
            'is_published' => $post->is_published,
            'published_at' => $post->published_at?->toISOString(),
            'created_at' => $post->created_at?->toISOString(),
            'updated_at' => $post->updated_at?->toISOString(),
        ], JSON_PRETTY_PRINT);
    }

    /**
     * Create a Blog model from JSON string.
     */
    public static function FromJson(string $json): Blog
    {
        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException('Invalid JSON provided: ' . json_last_error_msg());
        }

        // Convert ISO date strings back to Carbon instances
        if (isset($data['published_at']) && is_string($data['published_at'])) {
            $data['published_at'] = \Carbon\Carbon::parse($data['published_at']);
        }

        // Remove timestamps as they'll be auto-managed
        unset($data['created_at'], $data['updated_at']);

        // If ID exists, find and update; otherwise create new
        if (isset($data['id'])) {
            $post = Blog::find($data['id']);
            if ($post) {
                $post->fill($data);
                return $post;
            }
            unset($data['id']);
        }

        return new Blog($data);
    }

    /**
     * Get all unique categories.
     */
    public static function GetCategories(): array
    {
        return Blog::published()
            ->distinct()
            ->pluck('category', 'category_slug')
            ->toArray();
    }

    /**
     * Search posts by title and content.
     */
    public static function SearchPosts(string $query, int $perPage = 9): BlogResourceCollection
    {
        $posts = Blog::published()
            ->where(function ($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                  ->orWhere('excerpt', 'like', "%{$query}%")
                  ->orWhere('content_markdown', 'like', "%{$query}%");
            })
            ->latest()
            ->paginate($perPage);

        return new BlogResourceCollection($posts);
    }
}
