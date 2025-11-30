<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BERITA DESA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSS FOTO SERAGAM -->
    <style>
        .card-image {
            width: 100%;
            height: 250px; /* Semua foto sama */
            object-fit: cover;
            border-radius: 5px;
        }

        /* Biar semua card tingginya sama */
        .card-box {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-box .p-4 {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Fonts -->
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
            <h1 class="m-0 display-4 text-uppercase text-white">
                <i class="bi bi-building text-primary me-2"></i>WEB DESA </h1>
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
                </a>
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


<!-- Blog Start -->
<div class="container-fluid py-6 px-5">

    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4">Berita Desa</h1>
        <h4>Menyajikan Informasi Terbaru tentang Pristiwa, Berita Terkini, Dan Artikel- Artikel Jurnalistik Dari Desa Kujangsari</h4>
    </div>

    <div class="row g-5">

        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-light card-box">
                <img class="card-image" src="{{ asset('assets/img/blog-1.jpg') }}" alt="">
                <div class="p-4">
                    <span class="ms-3 mb-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan 2045</span>

                    <h4 class="mb-3">Desa Kujangsari jadi pusat eduwisata peternakan terpadu</h4>

                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-light card-box">
                <img class="card-image" src="{{ asset('assets/img/bantuan.jpg') }}" alt="">
                <div class="p-4">
                    <span class="ms-3 mb-3"><i class="far fa-calendar-alt text-primary me-2"></i>20 JUli,2030</span>

                    <h4 class="mb-3">"Gebyar BumDes" Desa Kujangsari</h4>

                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-light card-box">
                <img class="card-image" src="{{ asset('assets/img/30.jpg') }}" alt="">
                <div class="p-4">
                    <span class="ms-3 mb-3"><i class="far fa-calendar-alt text-primary me-2"></i>18 April,2035</span>

                    <h4 class="mb-3">Pemerintah Desa Kujangsari salurkan bantuan untuk lansia, disabilitas, dan penderita penyakit kronis</h4>

                </div>
            </div>
        </div>

    </div>

</div>
<!-- Blog End -->

</html>
