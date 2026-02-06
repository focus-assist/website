<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BlogResourceCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = BlogResource::class;

    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
            'meta' => $this->when($this->resource instanceof \Illuminate\Pagination\AbstractPaginator, function () {
                return [
                    'current_page' => $this->resource->currentPage(),
                    'last_page' => $this->resource->lastPage(),
                    'per_page' => $this->resource->perPage(),
                    'total' => $this->resource->total(),
                    'from' => $this->resource->firstItem(),
                    'to' => $this->resource->lastItem(),
                ];
            }),
            'links' => $this->when($this->resource instanceof \Illuminate\Pagination\AbstractPaginator, function () {
                return [
                    'first' => $this->resource->url(1),
                    'last' => $this->resource->url($this->resource->lastPage()),
                    'prev' => $this->resource->previousPageUrl(),
                    'next' => $this->resource->nextPageUrl(),
                ];
            }),
        ];
    }

    /**
     * Get the posts collection.
     */
    public function posts(): \Illuminate\Support\Collection
    {
        return $this->collection;
    }

    /**
     * Check if the collection is paginated.
     */
    public function isPaginated(): bool
    {
        return $this->resource instanceof \Illuminate\Pagination\AbstractPaginator;
    }

    /**
     * Get pagination info for views.
     */
    public function paginationInfo(): ?array
    {
        if (!$this->isPaginated()) {
            return null;
        }

        return [
            'current_page' => $this->resource->currentPage(),
            'last_page' => $this->resource->lastPage(),
            'per_page' => $this->resource->perPage(),
            'total' => $this->resource->total(),
            'has_more_pages' => $this->resource->hasMorePages(),
            'links' => $this->resource->links(),
        ];
    }

    /**
     * Get the underlying paginator for Blade views.
     */
    public function paginator(): ?\Illuminate\Pagination\AbstractPaginator
    {
        return $this->resource instanceof \Illuminate\Pagination\AbstractPaginator
            ? $this->resource
            : null;
    }
}
