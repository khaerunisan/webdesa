<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KotakSaran;

class KotakSaranController extends Controller
{
    // SIMPAN DARI FE
    public function kirim(Request $request)
    {
        KotakSaran::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
            'status' => 0
        ]);

        return back()->with('success', 'Saran berhasil dikirim');
    }

    // TAMPIL BACKEND
    public function saranback()
    {
        $data = KotakSaran::latest()->get();
        return view('page.backend.kotaksaran.saranback', compact('data'));
    }

    // TANDAI SUDAH DIBACA
    public function dibaca($id)
    {
        KotakSaran::where('id', $id)->update([
            'status' => 1
        ]);

        return back();
    }

    // HAPUS SARAN
    public function hapus($id)
    {
        KotakSaran::findOrFail($id)->delete();
        return back()->with('success', 'Saran berhasil dihapus');
    }
}
