<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $requestBody = [
            'user_id' => Session::get('user')['userData']['id'],
            'products' => json_encode($request->get('items')),
            'total_price' => $request->get('subtotal')
        ];

        $userEmail = !empty(Session::get('user')) ? Session::get('user')['userData']['email'] : '';
        return Http::withHeader('UserEmail', $userEmail)
            ->post('http://hairsaloon.api/api/order',$requestBody)->status();
    }
}
