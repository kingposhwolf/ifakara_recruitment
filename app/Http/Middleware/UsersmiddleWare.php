<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersmiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->roles_as == '0')
            {
                return $next($request);
                //return redirect('/dashboard')->with('status','Access Denied!');

            }
            else
            {
                return redirect('/')->with('status','Access Denied!');
            }
        }
        else
        {
            return redirect('/')->with('status','Please Login First');
        }
    }
}
