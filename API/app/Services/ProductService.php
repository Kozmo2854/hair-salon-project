<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductService
{
    public static function getProducts(): Collection
    {
        return Product::all();
    }
}
