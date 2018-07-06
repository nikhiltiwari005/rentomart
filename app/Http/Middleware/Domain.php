<?php

namespace App\Http\Middleware;

use Closure;

class Domain
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
        $subDomain = $request->subdomain ?: 'RentoMart';
        $request->attributes->add(compact('subDomain'));
        return $next($request);
    }
}
