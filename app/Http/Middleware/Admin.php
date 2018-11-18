<?php

namespace labquiam\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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

    if (Auth::user()->hasRole('cliente')) 
    {
       
        if (Auth::user()->estado == 0) 
        {
            return redirect('/')->with('activacion','El ADMINISTRADOR realizará el alta definitiva.');  
        }       
    }
    if (Auth::user()->hasRole('tecnico')) {
    if (Auth::user()->estado == 0) 
        {
            return redirect('/')->with('activacion',' El ADMINISTRADOR realizará la activación .');
        }
}
        return $next($request);
    }
}
