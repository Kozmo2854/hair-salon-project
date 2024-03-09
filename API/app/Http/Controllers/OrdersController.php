<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OrdersController extends BaseController
{
    protected mixed $modelClass = Order::class;

    public function store(Request $request): Model|string
    {
        $request->merge([
            'products' => json_encode($request->get('products')),
        ]);
        return parent::store($request);
    }

    public function getOrdersByUserId(Request $request, $userId)
    {
        return $this->modelClass->where('user_id', $userId)->get();
    }
}
