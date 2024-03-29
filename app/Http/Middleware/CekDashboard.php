<?php

namespace App\Http\Middleware;

use Closure;

class CekDashboard
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
        if(!\Session::has('user')){
            return redirect('/login');
        }
        return $next($request);
    }
}