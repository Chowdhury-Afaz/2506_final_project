<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Auth Check && customer
        if (!auth('customer')->check()) {
            auth()->logout();
            auth('customer')->logout();
            return to_route('homepage');
        }


        return $next($request);
    }
}
