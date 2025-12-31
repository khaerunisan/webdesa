<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = DB::table('produks')->get();
        return view('page.backend.produk.produkback', compact('produk'));
    }

    public function create()
    {
        return view('page.backend.produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image',
        ]);

        $fileName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('uploads/produk'), $fileName);

        DB::table('produks')->insert([
            'nama' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $fileName,
        ]);

        return redirect()->route('produkback')->with('success', 'Produk berhasil ditambahkan');
    }

    public function show($id)
    {
        $produk = DB::table('produks')->where('id', $id)->first();
        return view('page.backend.produk.show', compact('produk'));
    }

    public function edit($id)
    {
        $produk = DB::table('produks')->where('id', $id)->first();
        return view('page.backend.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
        ]);

        $updateData = [
            'nama' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ];

        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads/produk'), $fileName);
            $updateData['gambar'] = $fileName;
        }

        DB::table('produks')->where('id', $id)->update($updateData);

        return redirect()->route('produkback')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        DB::table('produks')->where('id', $id)->delete();
        return redirect()->route('produkback')->with('success', 'Produk berhasil dihapus');
    }

    // ================================
    // FRONTEND PRODUK DESA
    // ================================
    public function frontend()
    {
        $produk = DB::table('produks')->get();
        return view('page.frontend.produk.produkdesa', compact('produk'));
    }

    // ================================
    // DETAIL PRODUK FRONTEND
    // ================================
    public function detailFrontend($id)
    {
        $produk = DB::table('produks')->where('id', $id)->first();

        if (!$produk) {
            abort(404);
        }

        return view('page.frontend.produk.detail', compact('produk'));
    }
}
