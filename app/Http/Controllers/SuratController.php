<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function domisiliPDF()
    {
        $pdf = Pdf::loadView('page.backend.ppid.surat_domisili');
        return $pdf->download('surat_keterangan_domisili.pdf');
    }

    public function pindahPDF()
    {
        $pdf = Pdf::loadView('page.backend.ppid.surat_pindah');
        return $pdf->download('surat_keterangan_pindah.pdf');
    }

    public function usahaPDF()
    {
        $pdf = Pdf::loadView('page.backend.ppid.surat_usaha');
        return $pdf->download('surat_keterangan_usaha.pdf');
    }
}
