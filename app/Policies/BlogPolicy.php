<?php

namespace App\Policies;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BlogPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        // Anyone can view the blog list (published posts)
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(?User $user, Blog $blog): bool
    {
        // Anyone can view published posts
        if ($blog->is_published && $blog->published_at <= now()) {
            return true;
        }

        // Only authenticated users can view unpublished posts
        return $user !== null;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Only authenticated users can create blog posts
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Blog $blog): bool
    {
        // Only authenticated users can update blog posts
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Blog $blog): bool
    {
        // Only authenticated users can delete blog posts
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Blog $blog): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Blog $blog): bool
    {
        return true;
    }
}
