<?php

namespace App\Http\Controllers;
use App\Models\User;
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
        $authenticationAttempt = Auth::attempt($credentials);

        if ($authenticationAttempt) {
            $user = Auth::user();
            return redirect()->route('dashboard');
        } else {
            $errorMessage = 'Invalid credentials. Attempted credentials: ' . json_encode($credentials) . json_encode($authenticationAttempt);
            var_dump($errorMessage);
        
    
            return redirect('/login')->with('error', $errorMessage);
        }
    }
    protected function redirectToRole($role)
{

    switch ($role) {
        case 'etudiant':
        case 'delegue':
            return redirect()->route('/delegue-dashboard');
        /*case 'delegue':
            return redirect()->route('/delegue-dashboard');
        case 'delegue':
            return redirect()->route('/delegue-dashboard');*/
        default:
            return redirect('/');
    }
    
}
}
