<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMiddleware
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
        $names =[
            'test',
            'test1',
            'test2'
        ];
        if (in_array($request->name, $names ))
        {
            return $next($request);
        }      else{
            abort(403);
        }
    }
}
