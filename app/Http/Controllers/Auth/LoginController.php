<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $fixedEmail = 'bsagricultre52@gmail.com';
        $fixedPassword = 'BSagro%2420';

        if ($request->email === $fixedEmail && $request->password === $fixedPassword) {
            session(['loggedin' => true]);

            return redirect()->route('admin.products');
        }

        return back()->withErrors([
            'email' => 'Invalid login credentials.',
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('login');
    }
}
