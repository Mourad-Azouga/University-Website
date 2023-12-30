<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // Your custom login logic here
        $username = $request->input('username');
        $password = $request->input('password');

        // Perform authentication, for example, check credentials against the database
        if ($this->authenticate($username, $password)) {
            // If authentication succeeds, redirect to the dashboard or home page
            return redirect('/home');
        } else {
            // If authentication fails, redirect back to the login form with an error message
            return redirect('/login')->with('error', 'Invalid credentials');
        }
    }

    private function authenticate($username, $password)
    {
        // Your authentication logic goes here
        // Check the database, validate credentials, etc.

        // For a simple example, let's assume a hardcoded username and password
        $validUsername = 'admin';
        $validPassword = 'admin';

        return $username === $validUsername && $password === $validPassword;
    }
}
