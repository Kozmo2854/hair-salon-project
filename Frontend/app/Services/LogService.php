<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LogService
{
    public static function getLogs()
    {
        $userEmail = !empty(Session::get('user')) ? Session::get('user')['userData']['email'] : '';
        $responseBody = Http::withHeader('UserEmail', $userEmail)
            ->get("http://hairsaloon.api/api/logs")->body();
        return json_decode($responseBody);
    }
}
