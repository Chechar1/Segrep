<?php

namespace App\Http\Middleware;

use Closure;

class TokenEvita
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
        if (auth()->user()->is_valido)
            return redirect()->route('auth');

        return $next($request);
    }
}
