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
        background: #87c9ff;
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

<div class="container" 
     style="width:80%; margin-top:-10px; margin-left:auto; margin-right:auto;">

    <h1 style="font-size:32px; font-weight:bold; margin-bottom:30px; color:#000;">
        Produk Penawaran
    </h1>

    <a class="btn-add" href="{{ route('produk.create') }}" 
        style="float:right; margin-top:-10px; margin-bottom:10px; background:#5090D8; padding:6px 12px; color:white; font-size:13px; border-radius:3px; text-decoration:none;">
        + Tambah Produk
    </a>

    @foreach ($produk as $item)
    <div class="card" style="background:#8AB7C4; padding:30px; display:flex; gap:30px; border-radius:4px; width:100%; margin-bottom:20px;">

        <!-- FOTO PRODUK 3 BERJEJER -->
        <div style="display:flex; flex-direction:row; gap:10px;">

            <img src="{{ asset('uploads/produk/'.$item->gambar) }}" 
                 style="width:230px; height:230px; object-fit:cover; background:#fff; border-radius:3px;">

            <img src="{{ asset('uploads/produk/'.$item->gambar) }}" 
                 style="width:230px; height:230px; object-fit:cover; background:#fff; border-radius:3px;">

            <img src="{{ asset('uploads/produk/'.$item->gambar) }}" 
                 style="width:230px; height:230px; object-fit:cover; background:#fff; border-radius:3px;">
        </div>
        <!-- END FOTO -->

        <div class="right" style="flex:1; color:#fff;">

            <h2 style="margin:0; font-size:26px; font-weight:bold;">
                {{ $item->nama_produk }}
            </h2>

            <div class="price" style="margin-top:5px; font-size:18px; font-weight:bold;">
                Rp {{ number_format($item->harga, 0, ',', '.') }}
            </div>

            <div class="desc" style="margin-top:10px; line-height:1.5; font-size:15px; width:80%;">
                {{ $item->deskripsi }}
            </div>  

            <div class="btn-wrap" style="margin-top:10px;">
                <a class="btn-detail" href="{{ route('produk.show', $item->id) }}" 
                    style="padding:4px 10px; font-size:13px; border-radius:3px; background:#4E7EC9; color:white; text-decoration:none;">Detail</a>

                <a class="btn-edit" href="{{ route('produk.edit', $item->id) }}" 
                    style="padding:4px 10px; font-size:13px; border-radius:3px; background:#EFB73E; color:white; text-decoration:none;">Edit</a>

                <form action="{{ route('produk.delete', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete" 
                        style="padding:4px 10px; font-size:13px; border-radius:3px; background:#D9534F; color:white; border:none;">
                        Delete
                    </button>
                </form>

            </div>

        </div>
    </div>
    @endforeach

</div>

@endsection
