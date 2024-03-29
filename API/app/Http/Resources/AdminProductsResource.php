<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        {
            return [
                "id" => $this->id,
                "title" => $this->title,
                "originalPrice" => $this->originalPrice,
                "description" => $this->description,
                "image" => "<img class='product-admin-panel' src='" . $this->image . "' alt='product image'>",
                "discountedPrice" => $this->discountedPrice,
                "stock" => $this->stock,
                "category" => $this->category->title,
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
            ];
        }
    }
}
