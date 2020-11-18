<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use session;

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
public function redirectTo(){
    return route('home-admin');
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

public function adminLogin(Request $request)
{
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if(Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password])){

        Session::put('adminSession',$data['email']);
        return redirect()->intended('home-admin');

    }
    return redirect('/')->with("flash_message_error","Email ou Mot de pass Invalide");
}
}
