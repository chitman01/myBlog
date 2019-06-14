<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     //https://medium.com/@sawai_kung/laravel-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%97%E0%B8%B3-mutileple-role-authentication-%E0%B8%AD%E0%B8%A2%E0%B9%88%E0%B8%B2%E0%B8%87%E0%B8%87%E0%B9%88%E0%B8%B2%E0%B8%A2-how-to-f72130386daa
    public function handle($request, Closure $next)
    {
        if( Auth::check() && Auth::user()->isAdmin() ) {
            return $next($request);
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
}
