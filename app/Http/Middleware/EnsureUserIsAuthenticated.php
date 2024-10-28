<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class EnsureUserIsAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('loggedin')) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
