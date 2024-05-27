<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facecades\Hash;

class AuthManager extends Controller
{
    function ShowAuthForm(){
        return view('auth.form');
    }

    public function handleAuth(Request $request)
    {
        if ($request->has('login')) {
            // Logika untuk proses login
            $request->validate([
                'login_email' => 'required|email',
                'login_password' => 'required'
            ]);

            $credentials = [
                'email' => $request->login_email,
                'password' => $request->login_password
            ];

            if (Auth::attempt($credentials)) {
                return redirect()->intended(route('welcome'));
            } else {
                return redirect(route('auth.form'))->withErrors(['login_email' => 'The provided credentials do not match our records.']);
            }
        } elseif ($request->has('register')) {
            // Logika untuk proses registrasi
            $request->validate([
                'register_name' => 'required|string|max:255',
                'register_email' => 'required|string|email|max:255|unique:users',
                'register_password' => 'required|string|min:8|confirmed',
            ]);

            $user = User::create([
                'name' => $request->register_name,
                'email' => $request->register_email,
                'password' => Hash::make($request->register_password),
            ]);

            Auth::login($user);

            return redirect()->route('welcome');
        }
    }


}
