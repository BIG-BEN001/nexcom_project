<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use Illuminate\Support\Facades\Auth;

class TecshopMiddleware
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
        if(Auth::guard('tecshop_signIn')->user('email')){

            return $next($request);
        }else{

            return redirect()->route('getSignIn');
        }
    }



}
