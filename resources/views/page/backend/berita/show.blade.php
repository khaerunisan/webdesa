@extends('layouts.backend.app')

@section('content')

<style>
    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 250px; /* Lebar sidebar */
        background-color: #343a40;
        padding-top: 56px; /* Tinggi navbar */
        overflow-y: auto;
        z-index: 100;
    }

    .sidebar .navbar-nav .nav-link {
        color: white;
    }

    .sidebar .navbar-nav .nav-link:hover {
        background-color: #495057;
    }

    /* Navbar */
    .navbar.sticky-top {
        position: fixed;
        top: 0;
        left: 250px; /* menyesuaikan sidebar */
        right: 0;
        z-index: 101;
    }

    /* Konten utama */
    .main-content {
        margin-left: 250px; /* menyesuaikan sidebar */
        margin-top: 56px; /* menyesuaikan navbar */
        padding: 20px 40px; /* konten lebih luas */
    }

    /* Styling Card */
    .card-custom {
        width: 100%; /* Memperlebar card supaya tidak sempit */
        background: white;
        margin: 20px auto;
        padding: 40px;
        border-radius: 10px;
    }

    .btn-tambah {
        background: #75a4ca ;
        padding: 8px 12px;
        color: black;
        text-decoration: none;
        border-radius: 6px;
        float: right;
        margin-top: -20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 40px;
    }

    th, td {
        text-align: left;
        padding: 15px 5px;
        vertical-align: top;
    }

    td img {
        width: 75px;
        height: 55px;
        object-fit: cover;
        border-radius: 4px;
    }

    .aksi {
        display: flex;
        gap: 8px;
        margin-top: 5px;
    }

    .aksi a,
    .aksi button {
        padding: 6px 10px;
        font-size: 13px;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        border: none;
        color: white;
    }

    .detail { background: #64a9ff; }
    .edit { background: #ffd363; color: black !important; }
    .delete { background: #ff4b4b; }
</style>

<!-- Sidebar -->
<div class="sidebar bg-secondary">
    <nav class="navbar navbar-dark flex-column">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>WEB DESA</h3>
        </a>
        
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('assetsbackend/img/carousel-1.jpg') }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Desa Kujangsari</h6>
                <span>{{ Auth::user()->role ?? 'Admin' }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100 flex-column">
            <a href="index" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>DAHSBOARD</a>
            <a href="beritaback" class="nav-item nav-link"><i class="fa fa-th me-2"></i>BERITA</a>
            <a href="{{ route('produkback') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>PRODUK UMKM</a>
            <a href="ppidback" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>PPID</a>
             <a href="admin/kotaksaran" class="nav-item nav-link"><i class="fa fa-envelope me-2"></i>KOTAK SARAN</a>
            <a href="{{ route('logout') }}" class="nav-item nav-link" onclick="return confirm('Yakin ingin logout?')">
                <i class="fa fa-table me-2"></i>LOGOUT
            </a>
        </div>
    </nav>
</div>
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
