<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // ========================
    // TAMPILKAN LIST BERITA
    // ========================
    public function index()
    {
        $berita = Berita::all();
        return view('page.backend.berita.beritaback', compact('berita'));
    }

    // ========================
    // TAMPILKAN FORM CREATE
    // ========================
    public function create()
    {
        return view('page.backend.berita.create');
    }

    // ========================
    // SIMPAN DATA BERITA
    // ========================
    public function store(Request $request)
    {
        $request->validate([
            'judul'      => 'required',
            'deskripsi'  => 'required',
            'tanggal'    => 'required',
            'gambar'     => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $path = $request->file('gambar')->store('berita', 'public');

        Berita::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal'   => $request->tanggal,
            'gambar'    => $path,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    // ========================
    // DETAIL BERITA BACKEND
    // ========================
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('page.backend.berita.show', compact('berita'));
    }

    // ========================
    // TAMPILKAN FORM EDIT
    // ========================
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('page.backend.berita.edit', compact('berita'));
    }

    // ========================
    // UPDATE DATA BERITA
    // ========================
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'      => 'required',
            'deskripsi'  => 'required',
            'tanggal'    => 'required',
            'gambar'     => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $berita = Berita::findOrFail($id);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($berita->gambar);
            $path = $request->file('gambar')->store('berita', 'public');
            $berita->gambar = $path;
        }

        $berita->update([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal'   => $request->tanggal,
            'gambar'    => $berita->gambar,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    // ========================
    // HAPUS DATA BERITA
    // ========================
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        Storage::disk('public')->delete($berita->gambar);
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }

    // ==============================================================
    // FRONTEND — KIRIM DATA KE beritadesa.blade.php
    // ==============================================================
    public function frontend()
    {
        $berita = Berita::latest()->get();
        return view('page.frontend.berita.beritadesa', compact('berita'));
    }

    // ==============================================================
    // FRONTEND — DETAIL BERITA (BARU DITAMBAHKAN)
    // ==============================================================
    public function showDetailFE($id)
    {
        $berita = Berita::findOrFail($id);
        return view('page.frontend.berita.detail', compact('berita'));
    }
}
