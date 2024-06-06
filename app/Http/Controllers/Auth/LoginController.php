<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected function authenticated()
   {
       if(Auth::user()->roles_as == '1') //1 = Hr Login
       {
           return redirect('hrdashboard')->with('status','Welcome to your dashboard');
       }
       elseif(Auth::user()->roles_as == '2') //2 = Gs Login
       {
           return redirect('gsdashboard')->with('status','Welcome to your dashboard');
       }
       elseif(Auth::user()->roles_as == '3') //2 = auditor login
       {
           return redirect('auditordashboard')->with('status','Welcome to your dashboard');
       }

       elseif(Auth::user()->roles_as == '0') // Normal or Default User Login
       {
           return redirect('/dashboard')->with('status','Logged in successfully');
       }
       else{
            return redirect('/');
       }
   }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


}
