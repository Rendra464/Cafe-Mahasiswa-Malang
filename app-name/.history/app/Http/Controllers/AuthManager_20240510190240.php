<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function Login(){
        return view('Login');
    }

    // function signup(){

    // }

    function LoginPost(Request $request){
        $request->validate([
            'Username' => 'required',
            'Password' => 'required'
        ]);d

        $credentials = $request->only('Username','Passwor')
    }
}
