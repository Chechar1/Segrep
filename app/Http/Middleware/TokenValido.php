<?php

namespace App\Http\Middleware;

use Closure;

class TokenValido
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
            return $next($request);

        return redirect('/auth');
    }
}
