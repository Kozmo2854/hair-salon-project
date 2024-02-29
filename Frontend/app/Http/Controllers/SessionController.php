<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function test(Request $request) {
        if (!empty(Session::get('user'))){
            Session::forget('user');
            Session::flush();
        }else {
            Session::put('user', $request->all());
        }
    }
}
