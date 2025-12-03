@extends('layouts.backend.app')

@section('content')

<div class="container" style="width:70%; margin:40px auto;">

    <h2 style="font-size:28px; font-weight:bold; margin-bottom:20px;">
        Hapus Berita
    </h2>

    <div class="card" style="padding:25px; border-radius:12px;">

        <h3 style="font-size:22px; font-weight:bold; margin-bottom:10px;">
            {{ $berita->judul }}
        </h3>

        <p style="color:#555; margin-bottom:20px;">
            Tanggal: {{ $berita->tanggal }}
        </p>

        <img src="{{ asset('storage/' . $berita->gambar) }}" 
             alt="Gambar Berita" 
             style="width:100%; max-height:350px; object-fit:cover; border-radius:10px; margin-bottom:20px;">

        <p style="margin-bottom:20px;">
            {{ Str::limit($berita->deskripsi, 200) }}
        </p>

        <div style="margin-top:20px;">
            <p style="font-size:18px; color:#c00; font-weight:bold;">
                Apakah Anda yakin ingin menghapus berita ini?
            </p>

            <form action="{{ route('berita.destroy', $berita->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" 
                    style="padding:10px 20px; background:#d9534f; color:white; border:none; border-radius:6px;">
                    Hapus
                </button>

                <a href="{{ route('berita.index') }}" 
                    style="padding:10px 20px; background:#5bc0de; color:white; border-radius:6px; text-decoration:none;">
                    Batal
                </a>
            </form>
        </div>

    </div>

</div>

@endsection
