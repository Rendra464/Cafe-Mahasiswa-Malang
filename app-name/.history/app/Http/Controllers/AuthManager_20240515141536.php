<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facecades\Auth;
use Illuminate\Support\Facecades\Hash;

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
        if(!$user){
            return redirect(route('Login')->with("error","Login Detail are not valid"));
        }
    }
}
