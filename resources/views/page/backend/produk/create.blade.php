@extends('layouts.backend.app')

@section('content')

<div class="header" 
     style="background:#4a89c5; color:white; padding:18px 20px; font-size:22px; font-weight:bold;">
    Tambah Produk
</div>

<div class="container" style="background:#e6dede; padding:20px 40px;">

    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label style="font-weight:bold; color:#1a3b5d;">Nama Produk</label>
        <input type="text" name="nama_produk" placeholder="Masukan Nama Produk" required
               style="width:100%; padding:12px; border:1px solid #999; border-radius:3px; margin-bottom:25px;">

        <label style="font-weight:bold; color:#1a3b5d;">Deskripsi Produk</label>
        <textarea name="deskripsi" placeholder="Deskripsi Produk"
                  style="width:100%; height:110px; padding:12px; border:1px solid #999; border-radius:3px; margin-bottom:25px;"></textarea>

        <label style="font-weight:bold; color:#1a3b5d;">Gambar</label>
        <input type="file" name="gambar" required
               style="width:100%; padding:12px; border:1px solid #999; border-radius:3px; margin-bottom:25px;">

        <label style="font-weight:bold; color:#1a3b5d;">Harga Produk</label>
        <input type="number" name="harga" placeholder="harga Produk" required
               style="width:100%; padding:12px; border:1px solid #999; border-radius:3px; margin-bottom:25px;">

        <div class="button-area" style="margin-top:20px; display:flex; justify-content:flex-end; gap:12px;">
            <a href="{{ route('produkback') }}" 
               class="btn-cancel" 
               style="padding:8px 18px; background:#f0f0f0; border:1px solid #ccc; border-radius:4px; cursor:pointer;">
                Batal
            </a>

            <button type="submit" class="btn-save"
                    style="padding:8px 18px; background:#6bb7d6; border:none; color:white; border-radius:4px; cursor:pointer;">
                Simpan Produk
            </button>
        </div>

    </form>

</div>

@endsection
