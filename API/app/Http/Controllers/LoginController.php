<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): Authenticatable|bool
    {
        $attemptResult = Auth::attempt([
            'email' => $request->get("email"),
            'password' => $request->get("password")
        ]);

        if ($attemptResult) {
            return Auth::user();
        }

        return $attemptResult;
    }
}
