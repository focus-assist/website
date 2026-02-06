<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'content_markdown' => $this->content_markdown,
            'content_html' => $this->content_html,
            'category' => $this->category,
            'category_slug' => $this->category_slug,
            'featured_image' => $this->featured_image,
            'featured_image_alt' => $this->featured_image_alt,
            'author' => $this->author,
            'read_time_minutes' => $this->read_time_minutes,
            'read_time_label' => $this->read_time_minutes . ' min read',
            'is_featured' => $this->is_featured,
            'is_published' => $this->is_published,
            'published_at' => $this->published_at,
            'published_at_formatted' => $this->published_at?->format('M j, Y'),
            'published_at_iso' => $this->published_at?->toISOString(),
            'url' => route('public.blog.page.post', $this->slug),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    /**
     * Allow property-style access for Blade templates.
     */
    public function __get($key)
    {
        // Computed properties
        if ($key === 'read_time_label') {
            return $this->resource->read_time_minutes . ' min read';
        }
        if ($key === 'published_at_formatted') {
            return $this->resource->published_at?->format('M j, Y');
        }
        if ($key === 'published_at_iso') {
            return $this->resource->published_at?->toISOString();
        }
        if ($key === 'url') {
            return route('public.blog.page.post', $this->resource->slug);
        }

        // Delegate to parent for model properties
        return parent::__get($key);
    }

    /**
     * Get the underlying model.
     */
    public function getModel(): \App\Models\Blog
    {
        return $this->resource;
    }
}
