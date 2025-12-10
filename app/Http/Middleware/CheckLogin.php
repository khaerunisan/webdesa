<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    public function handle(Request $request, Closure $next)
    {
        // Jangan cek middleware untuk halaman login & logout
        if (
            $request->routeIs('login') ||
            $request->routeIs('login.process') ||
            $request->routeIs('logout')
        ) {
            return $next($request);
        }

        // Kalau belum login, arahkan ke login
        if (!$request->session()->has('isLogin')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
