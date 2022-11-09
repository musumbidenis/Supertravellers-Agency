<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class isLoggedIn
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
        if (is_null(Auth::user())) {
            return redirect('/login')->withErrors('You must be logged in to access this resource!');
        }
        return $next($request);
    }
}
