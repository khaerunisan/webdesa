<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AdminDashboardController extends Controller
{
    public function index()
    {
        /*
        |================================
        | BERITA (PAKAI MODEL - FIX)
        |================================
        */
        $totalBerita = Schema::hasTable((new Berita)->getTable())
            ? Berita::count()
            : 0;

        $dataTerbaru = Schema::hasTable((new Berita)->getTable())
            ? Berita::latest()->limit(5)->get()
            : collect();

        /*
        |================================
        | LAINNYA (AMANKAN DULU)
        |================================
        */
        $totalProduk = Schema::hasTable('produk')
            ? DB::table('produk')->count()
            : 0;

        $totalPPID = Schema::hasTable('ppid')
            ? DB::table('ppid')->count()
            : 0;

        $totalSaran = Schema::hasTable('kotak_saran')
            ? DB::table('kotak_saran')->count()
            : 0;

        $totalVisitor = Schema::hasTable('visitors')
            ? DB::table('visitors')->count()
            : 0;

        return view('page.backend.admin.index', compact(
            'totalBerita',
            'totalProduk',
            'totalPPID',
            'totalSaran',
            'totalVisitor',
            'dataTerbaru'
        ));
    }
}
