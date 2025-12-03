@extends('layouts.backend.app')

@section('content')

<div style="background:#4a89c5; color:white; padding:18px 20px; font-size:22px; font-weight:bold;">
    Edit Berita
</div>

<div style="background:#e6dede; padding:25px 40px;">

    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- JUDUL --}}
        <label style="font-weight:bold; color:#1a3b5d;">Judul Berita</label>
        <input type="text" name="judul" value="{{ old('judul', $berita->judul) }}" required
               style="width:100%; padding:12px; border:1px solid #999; border-radius:3px; margin-bottom:25px;">

        {{-- DESKRIPSI --}}
        <label style="font-weight:bold; color:#1a3b5d;">Deskripsi</label>
        <textarea name="deskripsi"
                  style="width:100%; height:120px; padding:12px; border:1px solid #999; border-radius:3px; margin-bottom:25px;">{{ old('deskripsi', $berita->deskripsi) }}</textarea>

        {{-- TANGGAL --}}
        <label style="font-weight:bold; color:#1a3b5d;">Tanggal</label>
        <input type="date" name="tanggal" value="{{ old('tanggal', $berita->tanggal) }}" required
               style="width:100%; padding:12px; border:1px solid #999; border-radius:3px; margin-bottom:25px;">

        {{-- GAMBAR LAMA --}}
        <label style="font-weight:bold; color:#1a3b5d;">Gambar Saat Ini</label><br>
        <img src="{{ asset('storage/' . $berita->gambar) }}" 
             style="width:200px; height:150px; object-fit:cover; border-radius:4px; margin-bottom:15px;">
        <br>

        {{-- UPLOAD GAMBAR BARU --}}
        <label style="font-weight:bold; color:#1a3b5d;">Ganti Gambar (opsional)</label>
        <input type="file" name="gambar"
               style="width:100%; padding:12px; border:1px solid #999; border-radius:3px; margin-bottom:25px;">

        <div style="display:flex; justify-content:flex-end; gap:12px;">

            <a href="{{ route('berita.index') }}"
               style="padding:8px 18px; background:#f0f0f0; border:1px solid #ccc; border-radius:4px; text-decoration:none;">
                Batal
            </a>

            <button type="submit"
                    style="padding:8px 18px; background:#6bb7d6; border:none; color:white; border-radius:4px; cursor:pointer;">
                Update Berita
            </button>

        </div>

    </form>

</div>

@endsection
