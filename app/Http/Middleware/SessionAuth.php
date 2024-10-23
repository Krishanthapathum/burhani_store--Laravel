<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class SessionAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is logged in by checking the session
        if (!Session::has('loggedin') || !Session::get('loggedin')) {
            return redirect('/login');  // Redirect to login page if not authenticated
        }

        return $next($request);  // Proceed to the next request if authenticated
    }
}
