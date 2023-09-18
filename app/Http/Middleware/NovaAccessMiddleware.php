<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NovaAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // &&$request->ip() == '188.161.179.66'
        if($request->user() &&$request->user()->hasRole('admin')){
            return $next($request);
        }else

        return redirect('/');
    }
}