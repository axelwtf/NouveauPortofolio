<?php

namespace App\Http\Middleware;

use Closure;

class AuthCheck
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
        if (Auth::check()){
            return view('/register');
        }
        else{
            return redirect('/');
        }
    }
}
