<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required',]
        ]);

        if(Auth::guard('user')->attempt($credentials)){
            return redirect()->route('consultants.dashboard');

        }else if(Auth::guard('patient')->attempt($credentials)) {
            return redirect()->route('patients.dashboard');

        }else if (Auth::guard('doctor')->attempt($credentials)) {
            return redirect()->route('doctors.dashboard');
        }

        return back()->withErrors([
            'email'=>'The provided credentials do not match our records.'
        ]);
    }
    public function showLoginForm(){
        return back();
    }
}
