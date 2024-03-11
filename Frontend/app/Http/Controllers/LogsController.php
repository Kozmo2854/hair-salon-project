<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LogsController extends Controller
{
    public function getLogs(Request $request): array
    {
        $userEmail = !empty(Session::get('user')) ? Session::get('user')['userData']['email'] : '';
        $responseBody = Http::withHeader('UserEmail', $userEmail)
            ->get('http://hairsaloon.api/api/logs')->body();
        return json_decode($responseBody)->data;
    }

}
