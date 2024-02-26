<?php

namespace App\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class CategoryService
{
    public static function getCategories(): Response
    {
        return Http::get('http://127.0.0.1:90/api/category');
    }
}
