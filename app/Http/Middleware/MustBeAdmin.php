<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MustBeAdmin
{
    // The simples way to create a protected route
    // todo: refactor this accept administrator role instead of a username
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest() || auth()->user() && auth()->user()->username !== 'ionelacristea'){
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
