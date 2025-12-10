<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Tampilkan halaman login
    public function showLogin()
    {
        return view('page.backend.login.login');
    }

    // Proses login
    public function loginProcess(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        // Validasi login sederhana
        if ($email === 'admin@gmail.com' && $password === 'admin123') {

            // Simpan session (cara paling aman)
            $request->session()->put('isLogin', true);

            // Arahkan ke dashboard
            return redirect()->route('dashboard');
        }

        // Jika gagal login
        return back()->with('error', 'Email atau Password salah!');
    }

    // Logout
    public function logout(Request $request)
    {
        // Hapus session login
        $request->session()->forget('isLogin');

        return redirect()->route('login');
    }
}
