<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;


class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {



//            if ($guard == "client" && Auth::guard($guard)->check()) {
//               return redirect('/MyAccount');
//          }

            if (Auth::guard($guard)->check()) {
                return redirect('/gs_admin/dashboard');
            }
            return $next($request);







    }






}