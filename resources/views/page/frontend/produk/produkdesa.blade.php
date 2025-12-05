<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PRODUK DESA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSS FOTO SERAGAM -->
    <style>
        .card-image {
            width: 100%;
            height: 250px; /* Semua foto sama */
            object-fit: cover;
            border-radius: 5px;
        }

        .card-box {
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 2px solid #528C94; /* Frame */
        border-radius: 10px;       /* Sudut halus */
        overflow: hidden;          /* Biar foto nggak keluar */
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
<div class="container-fluid sticky-top shadow-sm px-5 pe-lg-0"
     style="background: linear-gradient(90deg, #3E747B, #528C94, #A0DEE3);">
     
    <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0"
         style="background: transparent !important;">
         
        <a href="index.html" class="navbar-brand">
            <h1 class="m-0 display-4 text-uppercase text-white">
                <i class="bi bi-building text-primary me-2"></i>WEB DESA
            </h1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active text-white">Home</a>
                <a href="profil" class="nav-item nav-link text-white">Profile Desa</a>
                <a href="berita" class="nav-item nav-link text-white">Berita</a>

                <div class="nav-item dropdown">
                    <a href="produk" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Produk</a>
                    <div class="dropdown-menu m-0">
                        <a href="project.html" class="dropdown-item">PPID</a>
                        <a href="team.html" class="dropdown-item">The Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>

                <a href="galery" class="nav-item nav-link text-white">Galery</a>
                <a href="ppid" class="nav-item nav-link text-white">PPID</a>
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
        <h1 class="display-5 text-uppercase mb-4"> LAYANAN PROMOSI PRODUK UMKM DESA</h1>
    </div>

    <div class="row g-5">

        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-light card-box">
                <img class="card-image" src="{{ asset('assets/img/tanaman.jpeg') }}" alt="">
                <div class="p-4">
                    <span class="ms-3 mb-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan 2045</span>

                    <h4 class="mb-3">“Tanaman hias aglaonema dengan perpaduan warna merah dan hijau yang menarik. Mudah dirawat dan cocok sebagai dekorasi rumah maupun usaha, 
                        serta memiliki nilai jual baik bagi UMKM tanaman hias.”</h4>

                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-light card-box">
                <img class="card-image" src="{{ asset('assets/img/tanaman.jpeg') }}" alt="">
                <div class="p-4">
                    <span class="ms-3 mb-3"><i class="far fa-calendar-alt text-primary me-2"></i>20 JUli,2030</span>

                    <h4 class="mb-3">“Tanaman hias aglaonema dengan perpaduan warna merah dan hijau yang menarik. Mudah dirawat dan cocok sebagai dekorasi rumah maupun usaha, 
                        serta memiliki nilai jual baik bagi UMKM tanaman hias.”</h4>

                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-light card-box">
                <img class="card-image" src="{{ asset('assets/img/tanaman.jpeg') }}" alt="">
                <div class="p-4">
                    <span class="ms-3 mb-3"><i class="far fa-calendar-alt text-primary me-2"></i>18 April,2035</span>

                    <h4 class="mb-3">“Tanaman hias aglaonema dengan perpaduan warna merah dan hijau yang menarik. Mudah dirawat dan cocok sebagai dekorasi rumah maupun usaha, 
                        serta memiliki nilai jual baik bagi UMKM tanaman hias.”</h4>

                </div>
            </div>
        </div>

    </div>

</div>

<div class="container-fluid py-6 px-5">

    <!-- BAGIAN INI SUDAH DIRATA-KIRI -->
    <div class="text-start mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4"> LAYANAN PROMOSI PRODUK UMKM DESA</h1>
    </div>

    <div class="row g-5">

        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-light card-box">
                <img class="card-image" src="{{ asset('assets/img/kripik.jpeg') }}" alt="">
                <div class="p-4">
                    <span class="ms-3 mb-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan 2045</span>

                    <h4 class="mb-3">“Keripik jamur dengan tekstur renyah dan cita rasa gurih yang khas. Cocok sebagai camilan di rumah 
                        maupun pendamping usaha makanan, serta memiliki nilai jual tinggi bagi UMKM kuliner.”</h4>

                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-light card-box">
                <img class="card-image" src="{{ asset('assets/img/kripik.jpeg') }}" alt="">
                <div class="p-4">
                    <span class="ms-3 mb-3"><i class="far fa-calendar-alt text-primary me-2"></i>20 JUli,2030</span>

                    <h4 class="mb-3">“Keripik jamur dengan tekstur renyah dan cita rasa gurih yang khas. Cocok sebagai camilan di rumah maupun 
                        pendamping usaha makanan, serta memiliki nilai jual tinggi bagi UMKM kuliner.”</h4>

                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="bg-light card-box">
                <img class="card-image" src="{{ asset('assets/img/kripik.jpeg') }}" alt="">
                <div class="p-4">
                    <span class="ms-3 mb-3"><i class="far fa-calendar-alt text-primary me-2"></i>18 April,2035</span>

                    <h4 class="mb-3">“Keripik jamur dengan tekstur renyah dan cita rasa gurih yang khas. Cocok sebagai camilan di rumah maupun pendamping 
                        usaha makanan, serta memiliki nilai jual tinggi bagi UMKM kuliner.”</h4>

                </div>
            </div>
        </div>

    </div>

</div>
<!-- Blog End -->

 <!-- Footer Start --> 
<div class="footer container-fluid position-relative text-white-50 py-6 px-5"
     style="background: linear-gradient(135deg, #3E747B, #528C94, #A0DEE3);">
     
    <div class="row g-5">
        <div class="col-lg-6 pe-lg-5">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white">
                    <i class="bi bi-building text-primary me-2"></i>WEBUILD
                </h1>
            </a>
            <p>Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum
               diam sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
            <p><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</p>
            <p><i class="fa fa-phone-alt me-2"></i>+012 345 67890</p>
            <p><i class="fa fa-envelope me-2"></i>info@example.com</p>

            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="col-lg-6 ps-lg-5">
            <div class="row g-5">
                <div class="col-sm-6">
                    <h4 class="text-white text-uppercase mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h4 class="text-white text-uppercase mb-4">Popular Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>

                <div class="col-sm-12">
                    <h4 class="text-white text-uppercase mb-4">Newsletter</h4>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light"
                                   style="padding: 20px 30px;" placeholder="Your Email Address">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-dark text-white border-top border-primary px-0">
    <div class="d-flex flex-column flex-md-row justify-content-between">
        <div class="py-4 px-5 text-center text-md-start">
            <p class="mb-0">&copy; <a class="text-primary" href="#">Your Site Name</a>. All Rights Reserved.</p>
        </div>

        <div class="py-4 px-5 bg-primary footer-shape position-relative text-center text-md-end">
            <p class="mb-0">Designed by <a class="text-dark" href="https://htmlcodex.com">HTML Codex</a></p>
            <p class="mb-0">Distributed by <a class="text-dark" href="https://themewagon.com">ThemeWagon</a></p>
        </div>
    </div>
</div>
<!-- Footer End -->

</html>
