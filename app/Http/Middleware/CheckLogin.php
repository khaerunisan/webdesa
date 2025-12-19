<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    public function handle(Request $request, Closure $next)
    {
        // Lewati halaman login & proses login
        if (
            $request->routeIs('login') ||
            $request->routeIs('login.process')
        ) {
            return $next($request);
        }

        // Jika belum login → lempar ke login
        if (!$request->session()->has('isLogin')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
