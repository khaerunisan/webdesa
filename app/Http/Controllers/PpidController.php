<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpidController extends Controller
{
    public function index()
    {
        return view('page.backend.ppid.ppidback');
    }

    public function create()
    {
        return view('page.backend.ppid.create');
    }

    public function store(Request $request)
    {
        // proses simpan data PPID
    }

    public function edit($id)
    {
        return view('page.backend.ppid.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // proses update
    }

    public function destroy($id)
    {
        // proses hapus
    }


    // ================================
    //          DOWNLOAD BERKAS
    // ================================
    public function downloadBerkas($id)
    {
        // Contoh: file disimpan di public/uploads/ppid/berkas/
        $filePath = public_path("uploads/ppid/berkas/berkas_" . $id . ".pdf");

        if (!file_exists($filePath)) {
            abort(404, "File berkas tidak ditemukan");
        }

        return response()->download($filePath);
    }


    // ================================
    //          DOWNLOAD DOKUMEN
    // ================================
    public function downloadDokumen($id)
    {
        // Contoh: file disimpan di public/uploads/ppid/dokumen/
        $filePath = public_path("uploads/ppid/dokumen/dokumen_" . $id . ".pdf");

        if (!file_exists($filePath)) {
            abort(404, "File dokumen tidak ditemukan");
        }

        return response()->download($filePath);
    }
}
