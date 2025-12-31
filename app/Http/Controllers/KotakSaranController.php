<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KotakSaran;

class KotakSaranController extends Controller
{
    // ================================
    // SIMPAN SARAN DARI FRONTEND
    // ================================
    public function kirim(Request $request)
    {
        KotakSaran::create([
            'nama'   => $request->nama,
            'email'  => $request->email,
            'pesan'  => $request->pesan,
            'status' => 0
        ]);

        return back()->with('success', 'Saran berhasil dikirim');
    }

    // ================================
    // TAMPIL BACKEND + SEARCH + PAGINATION
    // ================================
    public function saranback(Request $request)
    {
        $search = $request->search;

        $data = KotakSaran::when($search, function ($query, $search) {
                $query->where('nama', 'like', "%{$search}%")
                      ->orWhere('email', 'like', "%{$search}%")
                      ->orWhere('pesan', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(5)
            ->withQueryString(); // 🔹 TAMBAHAN AMAN (search tidak hilang saat pindah halaman)

        return view('page.backend.kotaksaran.saranback', compact('data'));
    }

    // ================================
    // TANDAI SARAN SUDAH DIBACA
    // ================================
    public function dibaca($id)
    {
        KotakSaran::where('id', $id)->update([
            'status' => 1
        ]);

        return back();
    }

    // ================================
    // HAPUS SARAN
    // ================================
    public function hapus($id)
    {
        KotakSaran::findOrFail($id)->delete();
        return back()->with('success', 'Saran berhasil dihapus');
    }
}
