<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->type == 'admin') {
                return redirect('admin');
            }
            if (Auth::user()->type == 'staff') {
                return redirect('staff');
            }
            if (Auth::user()->type == 'client') {
                return redirect('client');
            }
            if (Auth::user()->type == 'candidate') {
                return redirect('candidate');
            }
        }

        return $next($request);
    }
}
