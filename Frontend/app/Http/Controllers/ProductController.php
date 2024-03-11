<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ProductController
{
    public function fetchAdminOrders(Request $request): array
    {
        $userEmail = !empty(Session::get('user')) ? Session::get('user')['userData']['email'] : '';
        $responseBody = Http::withHeader('UserEmail', $userEmail)->get('http://hairsaloon.api/api/admin/product')->body();
        return json_decode($responseBody)->data;
    }
}
