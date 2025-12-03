@extends('layouts.backend.app')

@section('content')

<div class="container" style="width:80%; margin:20px auto;">

    <h1 style="font-size:28px; font-weight:bold; margin-bottom:20px;">
        Detail Produk
    </h1>

    <div style="background:#8AB7C4; padding:25px; border-radius:6px; color:white; display:flex; gap:25px;">

        {{-- GAMBAR PRODUK --}}
        <div>
            <img src="{{ asset('uploads/produk/' . $produk->gambar) }}" 
                 style="width:260px; height:260px; object-fit:cover; border-radius:5px; background:white;">
        </div>

        {{-- DETAIL PRODUK --}}
        <div style="flex:1;">

            <h2 style="margin:0; font-size:26px; font-weight:bold;">
                {{ $produk->nama_produk }}
            </h2>

            <div style="margin-top:8px; font-size:18px; font-weight:bold;">
                Rp {{ number_format($produk->harga, 0, ',', '.') }}
            </div>

            <p style="margin-top:15px; font-size:15px; line-height:1.5;">
                {{ $produk->deskripsi }}
            </p>

            <div style="margin-top:20px;">
                <a href="{{ route('produkback') }}"
                   style="padding:8px 14px; background:#eee; color:#333; border-radius:4px; text-decoration:none;">
                   Kembali
                </a>

                <a href="{{ route('produk.edit', $produk->id) }}"
                   style="padding:8px 14px; background:#EFB73E; color:white; border-radius:4px; text-decoration:none;">
                    Edit
                </a>
            </div>

        </div>
    </div>

</div>

@endsection
