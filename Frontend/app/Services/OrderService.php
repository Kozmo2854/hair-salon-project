<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class OrderService
{
    public static function getProducts(): array
    {
        $userEmail = !empty(Session::get('user')) ? Session::get('user')['userData']['email'] : '';
        $responseBody = Http::withHeader('UserEmail', $userEmail)
            ->get("http://hairsaloon.api/api/order")->body();
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
