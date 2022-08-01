<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @return view
     */
    public function showLogin(){

        return view('login.login_form');

    }
    /**
     * 
     *$request
     * @param App\Http\Requests\LoginFormRequest
     */

    public function Login(LoginFormRequest $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();  
            return redirect('home')->with('login_success','ログインが成功しました。');
        }
        dd($$credentials);
        return back()->withErrors([
            'login_error'=> 'メールアドレスかパスワードが間違っています。'
        ]);
    }
}
