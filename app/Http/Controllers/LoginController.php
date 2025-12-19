<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('page.backend.login.login');
    }

    public function loginProcess(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        // LOGIN SIMPLE
        if ($email === 'admin@gmail.com' && $password === 'admin123') {

            // Set session login
            $request->session()->put('isLogin', true);

            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('isLogin');
        return redirect()->route('login');
    }
}
