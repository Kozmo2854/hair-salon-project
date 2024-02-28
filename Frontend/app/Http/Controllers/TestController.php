<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function test(Request $request) {
        //return $request->all();

        return response('Hello')->header('Content-Type', 'text/html')->header('Content-Encoding', "disabled");
    }
}
