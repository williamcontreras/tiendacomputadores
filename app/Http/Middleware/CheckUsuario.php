<?php

namespace App\Http\Middleware;

use Closure;

class CheckUsuario
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


        if(!Auth::user()->idrol==3){
            return redirect('/');
        }
        return $next($request);
    }
}
