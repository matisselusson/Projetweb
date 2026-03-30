<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Redirection vers le tableau de bord (logique d'auth à compléter)
        return redirect()->route('dashboard');
    }

    public function showForgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        // Logique d'envoi d'email à compléter
        return redirect()->route('login');
    }

    public function logout()
    {
        return redirect()->route('home');
    }
}
