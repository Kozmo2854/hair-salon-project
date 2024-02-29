<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UserService
{
    public static function verifyUser($id): array
    {
//        $responseBody = Http::get('http://hairsaloon.api/api/verifyUser')->body();
//        dd($responseBody);
//        return json_decode($responseBody,true)->role_id;
        return [];
    }
}
