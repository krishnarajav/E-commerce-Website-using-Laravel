<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    public function handle($request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect(route('login')); // Redirect to the login page if not logged in
        }

        return $next($request);
    }   
}
