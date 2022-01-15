<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  

class IsAdmin
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
        if(Auth::check()){
            if(Auth::user()->role_type == '1'){
                return redirect($request);
            }else{
                return redirect('/public/home')->with('error','You have not admin access');
            }
           return redirect('public/home');
        }
    }
}
