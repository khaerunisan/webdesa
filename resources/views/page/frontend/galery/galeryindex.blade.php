<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GALERI DESA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSS FOTO SERAGAM -->
    <style>
        .gallery-img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 10px;
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


<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
    <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
        <a href="index.html" class="navbar-brand">
            <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>WEB DESA</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="profil" class="nav-item nav-link">Profile Desa</a>
                <a href="berita" class="nav-item nav-link">Berita</a>

                <div class="nav-item dropdown">
                    <a href="produk" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
                    <div class="dropdown-menu m-0">
                        <a href="project.html" class="dropdown-item">PPID</a>
                        <a href="team.html" class="dropdown-item">The Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>

                <a href="galery" class="nav-item nav-link">Galery</a>
                <a href="ppid" class="nav-item nav-link ">PPID </a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->

    <style>

        /* Navbar */
        .navbar {
            background: #0c1a33;
            width: 100%;
            padding: 12px 40px;
            display: flex;
            justify-content: flex-end;
            gap: 25px;
        }

        .navbar a {
            color: #c7c7c7;
            text-decoration: none;
            font-size: 13px;
        }

        .navbar a.active {
            color: #ff7d7d;
            font-weight: bold;
        }

        </style>


<!-- About Start -->
<div class="container-fluid py-6 px-5">

    <!-- JUDUL UTAMA -->
    <div class="text-center mb-5">
        <h1 class="display-5 text-uppercase mb-2">GALERI DESA</h1>
        <h2>Menampilkan Kegiatan - Kegiatan Yang Berlangsung Di Desa</h2>
    </div>


    <!-- 1 -->
    <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-5 pb-5">
            <img src="{{ asset('assets/img/desa.jpeg') }}" class="gallery-img">
        </div>

        <div class="col-lg-7 text-start">
            <h4 class="text-uppercase mb-3 text-body">Pentingnya Partisipasi Warga Dalam Musyawarah Desa</h4>
            <p style="font-size: 26px;">
                Artikel ini akan membahas tentang peran serta aktif masyarakat dalam setiap pengambilan keputusan penting di desa.
            </p>
        </div>
    </div>


    <!-- 2 -->
    <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-5 pb-5">
            <img src="{{ asset('assets/img/manusia.jpeg') }}" class="gallery-img">
        </div>

        <div class="col-lg-7 text-start">
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
        <div class="col-lg-5 pb-5">
            <img src="{{ asset('assets/img/kujang.jpeg') }}" class="gallery-img">
        </div>

        <div class="col-lg-7 text-start">
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
        <div class="col-lg-5 pb-5">
            <img src="{{ asset('assets/img/garuda.jpeg') }}" class="gallery-img">
        </div>

        <div class="col-lg-7 text-start">
            <h4 class="text-uppercase mb-3 text-body">
                Kolaborasi Antar Lembaga Dalam Menjaga Keamanan
            </h4>
            <p style="font-size: 26px;">
                Artikel ini menyoroti kerjasama aparat keamanan, warga, dan pemerintah desa dalam menjaga ketertiban.
            </p>
        </div>
    </div>


    <!-- 5 -->
    <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-5 pb-5">
            <img src="{{ asset('assets/img/warga.jpeg') }}" class="gallery-img">
        </div>

        <div class="col-lg-7 text-start">
            <h4 class="text-uppercase mb-3 text-body">Peningkatan Pelayanan Publik</h4>
            <p style="font-size: 26px;">
                Artikel ini membahas perbaikan sistem pelayanan publik di desa melalui inovasi digital.
            </p>
        </div>
    </div>


    <!-- 6 -->
    <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-5 pb-5">
            <img src="{{ asset('assets/img/sampah.jpeg') }}" class="gallery-img">
        </div>

        <div class="col-lg-7 text-start">
            <h4 class="text-uppercase mb-3 text-body">
                Gotong Royong Warga Desa
            </h4>
            <p style="font-size: 26px;">
                Warga bersama aparatur desa bergotong royong membersihkan
                 lingkungan untuk menjaga kebersihan dan kenyamanan desa.
            </p>
        </div>
    </div>

</div>
<!-- About End -->

</html>
