<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController
{
    public function fetchAdminOrders(Request $request): array
    {
        $data =  Http::get('http://hairsaloon.api/api/admin/product')->body();
        return json_decode($data)->data;
    }
}
