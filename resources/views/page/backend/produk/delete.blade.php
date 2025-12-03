@extends('layouts.backend.app')

@section('content')

<div style="padding:30px 40px;">

    <h2 style="color:#b10000;">Hapus Produk</h2>
    <p>Apakah Anda yakin ingin menghapus produk berikut?</p>

    <div style="margin-top:20px; background:white; padding:20px; border-radius:6px;">
        <p><strong>Nama Produk:</strong> {{ $produk->nama_produk }}</p>
        <p><strong>Harga:</strong> Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
        <p><strong>Deskripsi:</strong> {{ $produk->deskripsi }}</p>

        <img src="{{ asset('uploads/produk/'.$produk->gambar) }}" 
             style="width:200px; height:200px; object-fit:cover; border-radius:4px; margin-top:10px;">

        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="margin-top:20px;">
            @csrf
            @method('DELETE')

            <a href="{{ route('produkback') }}" 
               style="padding:8px 16px; background:#ccc; text-decoration:none; border-radius:4px; margin-right:10px;">
                Batal
            </a>

            <button type="submit"
                style="padding:8px 16px; background:#d9534f; color:white; border:none; border-radius:4px; cursor:pointer;">
                Hapus Produk
            </button>
        </form>

    </div>

</div>

@endsection
