<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class PreventUserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response|View
    {
        $user = Session::get('user');
        if(empty($user) || $user['userData']['role_id']!=1){
            return redirect('/forbidden');
        }
        return $next($request);
    }
}
