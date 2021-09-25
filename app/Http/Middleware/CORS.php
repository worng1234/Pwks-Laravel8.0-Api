<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CORS
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
        header('Access-Control-Allow-Origin : *');
        header('Access-Control-Allow-Origin : Content-type,X-Auth-Token,Authorozation,Origin');
        return $next($request);
        // ->header('Access-Control-Allow-Origin', '*')
        // ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        // ->header('Access-Control-Allow-Origin : Content-type,X-Auth-Token,Authorozation,Origin');
        // ->header('Access-Control-Allow-Headers', 'Accept, Authorozation, Content-Type');
    }
}
