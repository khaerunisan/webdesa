<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KotakSaranController extends Controller
{
    public function kirim(Request $request)
    {
        DB::table('kotak_saran')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Saran berhasil dikirim');
    }
}
