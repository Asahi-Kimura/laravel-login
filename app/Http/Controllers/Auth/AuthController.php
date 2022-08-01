<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use App\Http\Controllers\Controller;

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
        dd($request->all());
        
    }
}
