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
            return redirect()->intended(route('home'));
        }
        return redirect(route('Login')->with("error","Login Detail are not valid"));
    }

    function RegistrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'Password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['Password'] = Hash::make($request->Password);
        $user = User::create($data);
    }
}
