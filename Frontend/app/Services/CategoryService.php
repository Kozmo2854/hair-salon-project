<?php

namespace App\Services;


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CategoryService
{
    public static function getCategories(): array
    {
        $userEmail = !empty(Session::get('user')) ? Session::get('user')['userData']['email'] : '';
        $responseBody = Http::withHeader('UserEmail', $userEmail)
            ->get("http://hairsaloon.api/api/category")->body();
        return json_decode($responseBody);
    }
}
