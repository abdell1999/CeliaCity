<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Administrate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (isset($request->user()->rol) && $request->user()->rol == 0)
            return $next($request);
        else abort(404);
    }
}
