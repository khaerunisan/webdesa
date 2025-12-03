@extends('layouts.backend.app')

@section('content')

<div class="header" 
     style="background:#4a89c5; color:white; padding:18px 20px; font-size:22px; font-weight:bold;">
    Edit Produk
</div>

<div class="container" style="background:#e6dede; padding:20px 40px;">

    <form action="{{ route('produk.update', $produk->id) }}" 
          method="POST" enctype="multipart/form-data">
        @csrf
        {{-- HAPUS @method('PUT') karena routenya POST --}}
        
        {{-- NAMA PRODUK --}}
        <label style="font-weight:bold; color:#1a3b5d;">Nama Produk</label>
        <input type="text" 
               name="nama_produk" 
               value="{{ $produk->nama_produk }}"
               required
               style="width:100%; padding:12px; border:1px solid #999; border-radius:3px; margin-bottom:25px;">

        {{-- DESKRIPSI --}}
        <label style="font-weight:bold; color:#1a3b5d;">Deskripsi Produk</label>
        <textarea name="deskripsi"
                  style="width:100%; height:110px; padding:12px; border:1px solid #999; border-radius:3px; margin-bottom:25px;">{{ $produk->deskripsi }}</textarea>

        {{-- GAMBAR LAMA --}}
        <label style="font-weight:bold; color:#1a3b5d;">Gambar Saat Ini</label><br>
        <img src="{{ asset('uploads/produk/' . $produk->gambar) }}" 
             style="width:150px; height:150px; object-fit:cover; border-radius:4px; margin-bottom:15px;">
        <br><br>

        {{-- UPLOAD GAMBAR BARU --}}
        <label style="font-weight:bold; color:#1a3b5d;">Ganti Gambar (opsional)</label>
        <input type="file" name="gambar"
               style="width:100%; padding:12px; border:1px solid #999; border-radius:3px; margin-bottom:25px;">

        {{-- HARGA --}}
        <label style="font-weight:bold; color:#1a3b5d;">Harga Produk</label>
        <input type="number" 
               name="harga" 
               value="{{ $produk->harga }}"
               required
               style="width:100%; padding:12px; border:1px solid #999; border-radius:3px; margin-bottom:25px;">

        <div class="button-area" style="margin-top:20px; display:flex; justify-content:flex-end; gap:12px;">
            <a href="{{ route('produkback') }}" 
               style="padding:8px 18px; background:#f0f0f0; border:1px solid #ccc; border-radius:4px; cursor:pointer;">
                Batal
            </a>

            <button type="submit"
                    style="padding:8px 18px; background:#6bb7d6; border:none; color:white; border-radius:4px; cursor:pointer;">
                Simpan Perubahan
            </button>
        </div>

    </form>

</div>

@endsection
