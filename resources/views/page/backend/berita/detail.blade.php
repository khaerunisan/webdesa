@extends('layouts.backend.app')

@section('content')
    <div class="card-custom">
        <h2>Detail Berita</h2>

        <p><strong>Judul:</strong> {{ $berita->judul }}</p>
        <p><strong>Deskripsi:</strong> {{ $berita->deskripsi }}</p>
        <p><strong>Tanggal:</strong> {{ $berita->tanggal }}</p>

        <img src="{{ asset('storage/' . $berita->gambar) }}" 
             style="width: 300px; margin-top: 20px;">
    </div>
@endsection
