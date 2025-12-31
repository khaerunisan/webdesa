<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class VisitorCounter
{
    public function handle(Request $request, Closure $next): Response
    {
        // CEK dulu apakah tabel visitors sudah ada
        if (Schema::hasTable('visitors')) {
            DB::table('visitors')->insert([
                'ip_address' => $request->ip(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return $next($request);
    }
}
