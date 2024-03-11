<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class PreventNonAuthorizedAccess
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response|View
    {
        $user = Session::get('user');
        if (empty($user)) {
            return redirect('/forbidden');
        }
        if (strpos($request->getPathInfo(), '/admin') !== false && $user['userData']['role_id'] != 1){
            return redirect('/forbidden');
        }
            return $next($request);
    }
}
