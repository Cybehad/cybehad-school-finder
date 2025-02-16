<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Administrator
{
    public function handle(Request $request, Closure $next): Response
    {
        return (Auth::user() && Auth::user()->is_admin) ? $next($request) : abort(403);
    }
}
