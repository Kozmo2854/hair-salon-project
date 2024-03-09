<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminProductsResource;
use App\Models\Product;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProductController extends BaseController
{
    protected mixed $modelClass = Product::class;
    public function getProductsForAdminPanel(): AnonymousResourceCollection
    {
        return AdminProductsResource::collection($this->modelClass->with('category')->get());
    }
}
