<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ProductService
{
    public static function getProducts(): array
    {
        $userEmail = !empty(Session::get('user')) ? Session::get('user')['userData']['email'] : '';
        $responseBody = Http::withHeader('UserEmail', $userEmail)
            ->get("http://hairsaloon.api/api/product?page=1")->body();
        return json_decode($responseBody,true);
    }
    public static function getAdminProducts(): array
    {
        $userEmail = !empty(Session::get('user')) ? Session::get('user')['userData']['email'] : '';
        $responseBody = Http::withHeader('UserEmail', $userEmail)
            ->get("http://hairsaloon.api/api/admin/product")->body();
        return json_decode($responseBody,true);
    }
}
