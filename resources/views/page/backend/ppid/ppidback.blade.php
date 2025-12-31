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
        background: black;
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

        <style>
            body {
                background: black;
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

            .page-wrapper {
                width: 85%;
                margin: 40px auto;
            }

            /* ===================== HEADER ===================== */
            .header-bar {
                width: 100%;
                background:  #75a4ca; 
                padding: 15px 25px;
                color: white;
                font-weight: bold;
                font-size: 14px;
                border-radius: 8px;
                text-transform: uppercase;
            }

            .header-links {
                float: right;
            }

            /* ===================== BOX ===================== */
            .white-box {
                background: #ffffff;
                border-radius: 10px;
                padding: 35px 40px;
                border: 1px solid #ccc;
                margin-top: 35px;
            }

            .section-title {
                font-size: 32px;
                font-weight: bold;
                text-align: center;
                color: #000;
                margin-top: 10px;
                margin-bottom: 30px;
            }

            .ppid-title {
                color: black;
                font-size: 32px;
                font-weight: bold;
            }

            .subtitle {
                font-size: 14px;
                color: #000;
                margin-bottom: 25px;
                margin-top: -10px;
                line-height: 1.5;
                font-weight: bold;
            }

            .btn-blue {
                background: #7AB0BD;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                color: white;
                font-weight: bold;
                display: inline-block;
                margin-top: 10px;
            }

            .section-green {
                color: black;
                font-weight: bold;
                margin-top: 25px;
            }

            /* ===================== SURAT BOX ===================== */
            .surat-item {
                margin-bottom: 25px;
                padding-bottom: 15px;
                border-bottom: 1px solid #ddd;
                line-height: 1.6;
                font-size: 16px;
            }

            .surat-title {
                font-weight: bold;
                font-size: 20px;
                color: #000;
            }

            .surat-info {
                color: #555;
                font-size: 14px;
                margin-left: 5px;
            }
        </style>



<div class="page-wrapper">


    <!-- ================================================= -->
    <!--                  KOTAK PPID (Paling Atas)        -->
    <!-- ================================================= -->

    <div class="white-box">
        <h2 class="ppid-title">PPID</h2>

        <p class="subtitle">
            PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI (PPID) ADALAH PEJABAT YANG<br>
            BERTANGGUNGJAWAB DI BIDANG PENYIMPANAN, PENDOKUMENTASIAN, PENYEDIAAN,<br>
            DAN/ATAU PELAYANAN INFORMASI DI BADAN PUBLIK.
        </p>

         
    </div>



    <!-- ================================================= -->
    <!--                  KOTAK DASAR HUKUM               -->
    <!-- ================================================= -->
    <div id="dasar_hukum" class="white-box">
        <h1 class="ppid-title">DASAR HUKUM</h1>
        <p class="subtitle">YANG MENDASARI PEMBENTUKAN PPID</p>

        <h3 class="section-green">UNDANG UNDANG REPUBLIK INDONESIA</h3>
        <ul>
            <li>Undang Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik</li>
            <li>Undang Undang Nomor 25 Tahun 2009 Tentang Pelayanan Publik</li>
            <li>Undang Undang Nomor 6 Tahun 2014 Tentang Desa</li>
        </ul>

        <h3 class="section-green">PERATURAN PEMERINTAH</h3>
        <ul>
            <li>Peraturan Pemerintah Nomor 61 Tahun 2010 tentang pelaksanaan UU No 14 Tahun 2008</li>
        </ul>

        <h3 class="section-green">PERATURAN KOMISI INFORMASI</h3>
        <ul>
            <li>Peraturan KI Pusat Nomor 1 Tahun 2010 tentang Standar Layanan Informasi Publik</li>
            <li>Peraturan KI Pusat Nomor 1 Tahun 2013 tentang Penyelesaian Sengketa</li>
            <li>Peraturan KI Pusat Nomor 1 Tahun 2017 tentang Pengklasifikasian Informasi</li>
            <li>Peraturan KI Pusat Nomor 1 Tahun 2018 tentang Standar Layanan Informasi Publik Desa</li>
            <li>Peraturan KI Pusat Nomor 1 Tahun 2021 tentang SLIP</li>
        </ul>

        <h3 class="section-green">PERATURAN MENTERI DALAM NEGERI</h3>
        <ul>
            <li>Terkait pelaksanaan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik</li>
        </ul>
    </div>



    <!-- ================================================= -->
    <!--           KOTAK SURAT (3 Surat Lengkap)          -->
    <!-- ================================================= -->
    <div class="white-box">
        <h1 class="ppid-title">KETERANGAN SURAT</h1>

        <!-- SURAT 1 -->
        <div class="surat-item">
            <span class="surat-title">SURAT KETERANGAN DOMISILI</span><br>
            <span class="surat-info">📄 Rencana Kerja Pemerintah Desa</span><br>
            <span class="surat-info">📅 Jumat, 8 Agustus 2025</span><br>
            <a href="surat" class="btn-blue">LIHAT BERKAS</a>
        </div>

        <!-- SURAT 2 -->
        <div class="surat-item">
            <span class="surat-title">SURAT KETERANGAN PINDAH / DATANG</span><br>
            <span class="surat-info">📄 Data Administrasi Penduduk</span><br>
            <span class="surat-info">📅 Senin, 12 Agustus 2025</span><br>
            <a href="berkas" class="btn-blue">LIHAT BERKAS</a>
        </div>

        <!-- SURAT 3 -->
        <div class="surat-item" style="border-bottom: none;">
            <span class="surat-title">SURAT KETERANGAN USAHA</span><br>
            <span class="surat-info">📄 Pendataan Pelaku UMKM Desa</span><br>
            <span class="surat-info">📅 Jumat, 08 Agustus 2025</span><br>
            <a href="dokumen" class="btn-blue">LIHAT BERKAS</a>
        </div>

    </div>

</div>

@endsection
