<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication succeeded, redirect to the dashboard or home page
            return redirect('/home');
        } else {
            // Authentication failed, redirect back to the login form with an error message
            return redirect('/login')->with('error', 'Invalid credentials');
        }
    }
}
