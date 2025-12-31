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
