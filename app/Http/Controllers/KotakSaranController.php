<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KotakSaranController extends Controller
{
    public function kirim(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'pesan' => 'required|string',
        ]);

        // Simpan ke database
        DB::table('kotak_saran')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect balik dengan pesan sukses
        return redirect('/kotaksaran')->with('success', 'Terima kasih! Saran Anda telah terkirim.');
    }
}
