<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'slug',
        'title',
        'excerpt',
        'content_markdown',
        'content_html',
        'category',
        'category_slug',
        'featured_image',
        'featured_image_alt',
        'author',
        'read_time_minutes',
        'is_featured',
        'is_published',
        'published_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'read_time_minutes' => 'integer',
    ];

    /**
     * Scope a query to only include published posts.
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true)
                     ->whereNotNull('published_at')
                     ->where('published_at', '<=', now());
    }

    /**
     * Scope a query to only include featured posts.
     */
    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope a query to order by published date descending.
     */
    public function scopeLatest(Builder $query): Builder
    {
        return $query->orderBy('published_at', 'desc');
    }

    /**
     * Scope a query to filter by category.
     */
    public function scopeInCategory(Builder $query, string $categorySlug): Builder
    {
        return $query->where('category_slug', $categorySlug);
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Calculate and set read time based on content.
     */
    public function calculateReadTime(): int
    {
        $wordCount = str_word_count(strip_tags($this->content_html));
        $readTime = max(1, (int) ceil($wordCount / 200)); // Assume 200 words per minute
        return $readTime;
    }
}
