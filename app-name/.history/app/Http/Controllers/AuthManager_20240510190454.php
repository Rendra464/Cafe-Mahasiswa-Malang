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
        ]);

        $credentials = $request->only('Username','Password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('welcome'));
        }
        return redirect(route('Login')->with('error'))
    }
}
