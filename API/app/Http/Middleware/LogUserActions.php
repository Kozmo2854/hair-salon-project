<?php

namespace App\Http\Middleware;

use App\Services\UserActionsService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogUserActions
{
    public const ROUTE_DESCRIPTION = [
        '/^\/api\/product$/' => [
            "POST" => 'Created a new product',
            "GET" => 'Viewed products list'
        ],
        '/^\/api\/product\/\d+$/' => [
            "GET" => 'Viewed a product',
            "PATCH" => 'Updated a product',
            "DELETE" => 'Deleted a product'
        ],
        '/^\/api\/admin\/product$/' => [
            "GET" => 'Viewed products for admin panel'
        ],
        '/^\/api\/category$/' => [
            "POST" => 'Created a new category',
            "GET" => 'Viewed categories list'
        ],
        '/^\/api\/category\/\d+$/' => [
            "GET" => 'Viewed a category',
            "PATCH" => 'Updated a category',
            "DELETE" => 'Deleted a category'
        ],
        '/^\/api\/reservation$/' => [
            "POST" => 'Created a new reservation',
            "GET" => 'Viewed reservations list'
        ],
        '/^\/api\/reservation\/\d+$/' => [
            "GET" => 'Viewed a reservation',
            "PATCH" => 'Updated a reservation',
            "DELETE" => 'Deleted a reservation'
        ],
        '/^\/api\/user$/' => [
            "POST" => 'Created a new user',
            "GET" => 'Viewed users list'
        ],
        '/^\/api\/user\/\d+$/' => [
            "GET" => 'Viewed a user',
            "PATCH" => 'Updated a user',
            "DELETE" => 'Deleted a user'
        ],
        '/^\/api\/verifyUser$/' => [
            "GET" => 'Verified user'
        ],
        '/^\/api\/order$/' => [
            "POST" => 'Created a new order',
            "GET" => 'Viewed orders list'
        ],
        '/^\/api\/order\/\d+$/' => [
            "GET" => 'Viewed an order',
            "PATCH" => 'Updated an order',
            "DELETE" => 'Deleted an order'
        ],
        '/^\/api\/order\/user\/\d+$/' => [
            "GET" => 'Viewed orders for a user'
        ],
        '/^\/api\/role$/' => [
            "POST" => 'Created a new role',
            "GET" => 'Viewed roles list'
        ],
        '/^\/api\/role\/\d+$/' => [
            "GET" => 'Viewed a role',
            "PATCH" => 'Updated a role',
            "DELETE" => 'Deleted a role'
        ],
        '/^\/api\/booking$/' => [
            "POST" => 'Created a new booking',
            "GET" => 'Viewed bookings list'
        ],
        '/^\/api\/booking\/\d+$/' => [
            "GET" => 'Viewed a booking',
            "PATCH" => 'Updated a booking',
            "DELETE" => 'Deleted a booking'
        ],
        '/^\/api\/login$/' => [
            "GET" => 'Authenticated user'
        ],
        '/^\/api\/logs$/' => [
            "GET" => 'Viewed logs'
        ]
    ];

    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response|null
    {
        $regexPattern = "/^" . preg_replace('/\/\d+$/', '/\d+', preg_quote($request->getPathInfo(), '/')) . "$/";
        $requestParameters = $request->route()->parameters();
        $id = reset($requestParameters);
        $action = self::ROUTE_DESCRIPTION[$regexPattern][$request->method()];
        $userEmail = json_encode($request->get('user_email'));
        if(empty($userEmail=='')){
            $userEmail = $request->header('UserEmail');
        }
        UserActionsService::save([
            'action' => $action,
            'user_email' => $userEmail,
            'object_id' => is_numeric($id) ?? '',
        ]);
        Log::channel('user_action')->info(
            "User with email: " . $userEmail . ' ' . $action . (is_numeric($id) ? " with ID " . $id : '')
        );
        return $next($request);
    }
}
