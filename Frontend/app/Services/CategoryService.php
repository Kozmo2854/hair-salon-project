<?php

namespace App\Services;


use Illuminate\Support\Facades\Http;

class CategoryService
{
    public static function getCategories(): array
    {
        $responseBody = Http::get('http://hairsaloon.api/api/category')->body();
        return json_decode($responseBody);
    }
}
