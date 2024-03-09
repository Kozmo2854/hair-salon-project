<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;

class ProductService
{
    public static function getProducts(): array
    {
        $responseBody = Http::get('http://hairsaloon.api/api/product?page=1')->body();
        return json_decode($responseBody,true);
    }
    public static function getAdminProducts(): array
    {
        $responseBody = Http::get('http://hairsaloon.api/api/admin/product')->body();
        return json_decode($responseBody,true);
    }
}
