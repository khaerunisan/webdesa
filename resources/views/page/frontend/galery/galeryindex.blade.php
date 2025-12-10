<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GALERI DESA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSS FOTO SERAGAM (DIPERBESAR) -->
    <style>
        .gallery-img {
            width: 100%;
            height: 480px; /* ✅ diperbesar */
            object-fit: cover;
            border-radius: 15px;
            cursor: pointer;
        }
    </style>

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Style -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
    <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
        <a href="index.html" class="navbar-brand">
            <h1 class="m-0 display-4 text-uppercase text-white">
                <i class="bi bi-building text-primary me-2"></i>WEB DESA
            </h1>
        </a>
    </nav>
</div>
<!-- Navbar End -->

<!-- About Start -->
<div class="container-fluid py-6 px-5">

    <div class="text-center mb-5">
        <h1 class="display-5 text-uppercase mb-2">GALERI DESA</h1>
        <h2>Menampilkan Kegiatan - Kegiatan Yang Berlangsung Di Desa</h2>
    </div>

    <!-- 1 -->
    <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-6 pb-5"> <!-- ✅ kolom diperbesar -->
            <a href="{{ asset('assets/img/desa.jpeg') }}" data-lightbox="galeri" data-title="Musyawarah Desa">
                <img src="{{ asset('assets/img/desa.jpeg') }}" class="gallery-img">
            </a>
        </div>
        <div class="col-lg-6 text-start">
            <h4 class="text-uppercase mb-3 text-body">Pentingnya Partisipasi Warga Dalam Musyawarah Desa</h4>
            <p style="font-size: 26px;">
                Artikel ini akan membahas tentang peran serta aktif masyarakat dalam setiap pengambilan keputusan penting di desa.
            </p>
        </div>
    </div>

    <!-- 2 -->
    <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-6 pb-5">
            <a href="{{ asset('assets/img/manusia.jpeg') }}" data-lightbox="galeri" data-title="Kegiatan Keagamaan">
                <img src="{{ asset('assets/img/manusia.jpeg') }}" class="gallery-img">
            </a>
        </div>
        <div class="col-lg-6 text-start">
            <h4 class="text-uppercase mb-3 text-body">
                Penyelenggaraan Kegiatan Keagamaan dan Pendidikan di Lingkungan Desa
            </h4>
            <p style="font-size: 26px;">
                Fokus artikel ini adalah inisiatif desa dalam meningkatkan mutu keagamaan dan pendidikan anak-anak.
            </p>
        </div>
    </div>

    <!-- 3 -->
    <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-6 pb-5">
            <a href="{{ asset('assets/img/kujang.jpeg') }}" data-lightbox="galeri" data-title="Dana Desa">
                <img src="{{ asset('assets/img/kujang.jpeg') }}" class="gallery-img">
            </a>
        </div>
        <div class="col-lg-6 text-start">
            <h4 class="text-uppercase mb-3 text-body">
                Transparansi dan Akuntabilitas Pengelolaan Dana Desa
            </h4>
            <p style="font-size: 26px;">
                Artikel ini menguraikan pentingnya pengelolaan dana desa yang terbuka dan dapat dipertanggungjawabkan.
            </p>
        </div>
    </div>

    <!-- 4 -->
    <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-6 pb-5">
            <a href="{{ asset('assets/img/garuda.jpeg') }}" data-lightbox="galeri" data-title="Keamanan Desa">
                <img src="{{ asset('assets/img/garuda.jpeg') }}" class="gallery-img">
            </a>
        </div>
        <div class="col-lg-6 text-start">
            <h4 class="text-uppercase mb-3 text-body">
                Kolaborasi Antar Lembaga Dalam Menjaga Keamanan
            </h4>
            <p style="font-size: 26px;">
                Artikel ini menyoroti kerjasama aparat keamanan, warga, dan pemerintah desa dalam menjaga ketertiban.
            </p>
        </div>
    </div>

</div>
<!-- About End -->

<!-- JS LIGHTBOX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

</body>
</html>
