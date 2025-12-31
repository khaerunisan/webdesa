<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PRODUK DESA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <style>
        .card-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 5px;
        }
        .card-box { height: 100%; display: flex; flex-direction: column; }
        .card-box .p-4 {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>

    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
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
                <a href="index.html" class="nav-item nav-link ">Home</a>
                <a href="profil" class="nav-item nav-link">Profile Desa</a>
                <a href="berita" class="nav-item nav-link">Berita</a>

                <div class="nav-item dropdown">
                    <a href="produk" class="nav-link " data-bs-toggle="dropdown">Produk</a>
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
    .navbar {
        background: #33270c;
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

<body>

<!-- BLOG START -->
<div class="container-fluid py-6 px-5">

    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4">LAYANAN PROMOSI PRODUK UMKM DESA</h1>
        <h4>Layanan Promosi UMKM desa disediakan untuk membantu pelaku usaha memperluas pemasaran meningkatkan daya saing.</h4>
    </div>

    <div class="row g-5">

        @foreach ($produk as $item)
        <div class="col-lg-4 col-md-6">
            <div class="bg-light card-box">

                <!-- ============================= -->
                <!-- LINK DETAIL FRONTEND (FIX) -->
                <!-- ============================= -->
                <a href="{{ route('produk.detail.fe', $item->id) }}" style="text-decoration:none; color:inherit;">

                    {{-- FOTO PRODUK --}}
                    <img class="card-image"
                         src="{{ asset('uploads/produk/' . $item->gambar) }}"
                         alt="{{ $item->nama}}">

                    <div class="p-4">

                        {{-- TANGGAL --}}
                        <span class="ms-3 mb-3">
                            <i class="far fa-calendar-alt text-primary me-2"></i>
                            {{ $item->created_at ?? 'Tanggal tidak ada' }}
                        </span>

                        {{-- DESKRIPSI PRODUK --}}
                        <h4 class="mb-3">
                            {{ $item->deskripsi }}
                        </h4>

                    </div>

                </a>
                <!-- ============================= -->
                <!-- LINK DETAIL BERAKHIR -->
                <!-- ============================= -->

            </div>
        </div>
        @endforeach

    </div>

</div>
<!-- BLOG END -->

</body>
</html>
