@extends('layouts.backend.app')

@section('content')
<div class="container" style="width:85%; margin:30px auto;">

    <h2 style="font-size:32px; font-weight:bold; margin-bottom:20px;">Detail Berita</h2>

    <a href="{{ route('berita.index') }}" 
       style="display:inline-block; margin-bottom:20px; padding:8px 16px; background:#5090D8; 
              color:white; border-radius:6px; text-decoration:none;">
        ← Kembali
    </a>

    <div style="background:white; padding:25px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1);">

        {{-- Judul --}}
        <h1 style="font-size:28px; font-weight:700; margin-bottom:10px;">
            {{ $berita->judul }}
        </h1>

        {{-- Tanggal --}}
        <p style="font-size:14px; color:#777; margin-bottom:20px;">
            Tanggal: {{ $berita->tanggal }}
        </p>

        {{-- Gambar --}}
        @if($berita->gambar)
            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="gambar berita"
                 style="width:100%; max-height:400px; object-fit:cover; border-radius:10px; margin-bottom:20px;">
        @endif

        {{-- Deskripsi --}}
        <div style="font-size:16px; line-height:1.7; margin-top:20px;">
            {!! nl2br(e($berita->deskripsi)) !!}
        </div>

        {{-- Tombol Edit & Hapus --}}
        <div style="margin-top:30px; display:flex; gap:10px;">

            <a href="{{ route('berita.edit', $berita->id) }}" 
               style="padding:10px 18px; background:#28a745; color:white; border-radius:6px; 
                text-decoration:none;">
                Edit
            </a>

            <form action="{{ route('berita.destroy', $berita->id) }}" method="POST"
                  onsubmit="return confirm('Yakin ingin menghapus berita ini?');">
                @csrf
                @method('DELETE')

                <button type="submit" 
                        style="padding:10px 18px; background:#e3342f; color:white; border-radius:6px; border:none;">
                    Hapus
                </button>
            </form>

        </div>
    </div>

</div>
@endsection
