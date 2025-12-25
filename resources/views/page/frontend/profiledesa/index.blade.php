<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WEBUILD -  Construction Company Website Template Free</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

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
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="profil" class="nav-item nav-link">Profile Desa</a>
                    <a href="berita" class="nav-item nav-link">Berita</a>
                    <div class="nav-item dropdown">
                        <a href="produk" class="nav-link">Produk</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            
                            <h1 class="display-2 text-uppercase text-white mb-md-4">Selamat Datang Website Resmi Desa Kujangsari</h1>
    
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-tools fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h1 class="display-2 text-uppercase text-white mb-md-4">We Are Trusted For Your Project</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


     <!-- Services Start -->

<div class="container-fluid bg-light py-6 px-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4">JELAJAHI DESA</h1>
    </div>
    <div class="row g-5">
        
        <div class="col-lg-4 col-md-6">
            <a href="profil" class="text-decoration-none d-flex flex-column align-items-center text-center">
                <div class="service-icon bg-white p-4 mb-3">
                    <i class="fa fa-4x fa-building text-primary"></i> 
                </div>
                <div class="p-4 pt-0">
                    <h4 class="text-uppercase mb-0">PROFIL DESA</h4>
                </div>
            </a>
        </div>
        
        <div class="col-lg-4 col-md-6">
             <a href="produk" class="text-decoration-none d-flex flex-column align-items-center text-center">
                <div class="service-icon bg-white p-4 mb-3">
                    <i class="fa fa-4x fa-shopping-cart text-primary"></i>
                </div>
                <div class="p-4 pt-0">
                    <h4 class="text-uppercase mb-0">PRODUK</h4>
                </div>
            </a>
        </div>
        
        <div class="col-lg-4 col-md-6">
             <a href="ppid" class="text-decoration-none d-flex flex-column align-items-center text-center">
                <div class="service-icon bg-white p-4 mb-3">
                    <i class="fa fa-4x fa-eye text-primary"></i> 
                </div>
                <div class="p-4 pt-0">
                    <h4 class="text-uppercase mb-0">PPID</h4>
                </div>
            </a>
        </div>
        
        <div class="col-lg-4 col-md-6">
             <a href="berita" class="text-decoration-none d-flex flex-column align-items-center text-center">
                <div class="service-icon bg-white p-4 mb-3">
                    <i class="fa fa-4x fa-bullhorn text-primary"></i>
                </div>
                <div class="p-4 pt-0">
                    <h4 class="text-uppercase mb-0">BERITA</h4>
                </div>
            </a>
        </div>
        
        <div class="col-lg-4 col-md-6">
             <a href="/kotaksaran" class="text-decoration-none d-flex flex-column align-items-center text-center">
                <div class="service-icon bg-white p-4 mb-3">
                    <i class="fa fa-4x fa-envelope text-primary"></i>
                </div>
                <div class="p-4 pt-0">
                    <h4 class="text-uppercase mb-0">SURAT</h4>
                </div>
            </a>
        </div>
        
        <div class="col-lg-4 col-md-6">
             <a href="galery" class="text-decoration-none d-flex flex-column align-items-center text-center">
                <div class="service-icon bg-white p-4 mb-3">
                    <i class="fa fa-4x fa-image text-primary"></i>
                </div>
                <div class="p-4 pt-0">
                    <h4 class="text-uppercase mb-0">GALERI</h4>
                </div>
            </a>
        </div>
        
    </div>
</div>
    <!-- Services End -->



    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-5 text-uppercase mb-4">Sambutan Kepala Desa Kujangsari</h1>
                <h2> Bambang </h2>
                <h4 class="text-uppercase mb-3 text-body"> Selamat Datang Di Website Resmi Desa Kujangsari</h4>
                <p>SElamat datang di website resmi desa kujangsari. Website ini di bangun sebagai sarana untuk mempermudah sistem kerja sera tata kelola pemerintahan desa kujangsari, sekaligus menjadi media penyapaian informasi resm terkait agenda, program, dan kegiatan pemerintah desa kepada seluruh masyarakat. Melalui website ini kami berharap tercinta transfaransi dan keterbukaan informasi publik sehingga warga dapat dengan mudah mengakses data, berita, serta layanan desa kapan saja. Untuk memeprmudah pelayanan berbasis digital, warga desa kujangsari juga dapat mengunduh aplikasi mobile warga di perangkat android.</p>
                
                <img src="{{ asset('assets/img/signature.jpg') }}" alt="">
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="{{ asset('assets/img/bapak.jpeg') }}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
        <div class="container-fluid py-6 px-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4">SOTK</h1>
        <h2>Struktur Dan Tata Kerja Desa Kujangsari</h2>
    </div>

    <div class="row g-5">

        <!-- 1. Kepala Desa -->
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="row g-0">
                <div class="col-10" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/kepaladesa.webp') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-12">
                    <div class="bg-light p-4">
                        <h4 class="text-uppercase">Bambang</h4>
                        <span>Kepala Desa</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Sekdes -->
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="row g-0">
                <div class="col-10" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/Dylan Adams.jpeg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-12">
                    <div class="bg-light p-4">
                        <h4 class="text-uppercase">Dylan Adams</h4>
                        <span>Sekretaris Desa</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Kaur TU -->
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="row g-0">
                <div class="col-10" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/Jhon Doe.jpeg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-12">
                    <div class="bg-light p-4">
                        <h4 class="text-uppercase">Jhon Doe</h4>
                        <span>Kaur Tata Usaha Dan Umum</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Kaur Keuangan -->
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="row g-0">
                <div class="col-10" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('assets/img/Josh Dunn.webp') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-12">
                    <div class="bg-light p-4">
                        <h4 class="text-uppercase">Josh Dunn</h4>
                        <span>Kaur Keuangan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    <!-- Team End -->

    

   



   <!-- Portfolio Start -->
<style>
    .portfolio-box img {
        width: 100%;
        height: 280px; /* Sesuaikan jika ingin lebih besar/kecil */
        object-fit: cover; /* Foto tidak gepeng, otomatis crop rapi */
        border-radius: 10px;
    }
</style>

<div class="container-fluid bg-light py-6 px-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4"> Galery Desa</h1>
        <h2> Menampilkan Kegiatan Yang Berlangsung Di Desa Kujangsari</h2>
    </div>

    <div class="row g-5 portfolio-container">

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/img/warga.jpeg') }}" alt="">
                <a class="portfolio-btn" href="{{ asset('assets/img/warga.jpeg') }}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/img/desa.jpeg') }}" alt="">
                <a class="portfolio-btn" href="{{ asset('assets/img/desa.jpeg') }}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/img/kujang.jpeg') }}" alt="">
                <a class="portfolio-btn" href="{{ asset('assets/img/kujang.jpeg') }}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/img/banjar.jpeg') }}" alt="">
                <a class="portfolio-btn" href="{{ asset('assets/img/banjar.jpeg') }}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/img/garuda.jpeg') }}" alt="">
                <a class="portfolio-btn" href="{{ asset('assets/img/garuda.jpeg') }}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/img/sampah.jpeg') }}" alt="">
                <a class="portfolio-btn" href="{{ asset('assets/img/sampah.jpeg') }}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>

    </div>
</div>
<!-- Portfolio End -->




    <!-- Testimonial Start -->
<div class="container-fluid bg-light py-6 px-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4"> Wisata Desa </h1>
    </div>

    <div class="row g-4">

        <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item first">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/img/lembah.jpeg') }}" alt="">

                <!-- BOX PERBESAR -->
                <a class="portfolio-title shadow-sm" 
                   style="padding: 25px; min-height: 170px; display: block;">
                    <p class="h4 text-uppercase mb-2">Air Terjun</p>
                    <span class="text-body" style="font-size: 15px;">
                        
                        Air terjun alami dengan aliran jernih di tengah hutan – tempat favorit untuk relaksasi dan menikmati kesejukan alam.
                    </span>
                </a>

                <a class="portfolio-btn" href="img/lembah.jpeg" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item first">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/img/gunung.jpeg') }}" alt="">

                <!-- BOX PERBESAR -->
                <a class="portfolio-title shadow-sm" 
                   style="padding: 25px; min-height: 170px; display: block;">
                    <p class="h4 text-uppercase mb-2">Perbukitan & Laut</p>
                    <span class="text-body" style="font-size: 15px;">
                      
                        Keindahan perbukitan hijau dengan panorama laut yang menenangkan – cocok untuk berwisata menikmati suasana damai.
                    </span>
                </a>

                <a class="portfolio-btn" href="img/gunung.jpeg" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item first">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('assets/img/hijau.webp') }}" alt="">

                <!-- BOX PERBESAR -->
                <a class="portfolio-title shadow-sm" 
                   style="padding: 25px; min-height:170px; display: block;">
                    <p class="h4 text-uppercase mb-2">Sawah Hijau</p>
                    <span class="text-body" style="font-size: 15px;">
                        
                        Hamparan sawah hijau yang indah dengan suasana alami khas pedesaan – tempat yang cocok untuk foto dan bersantai.
                    </span>
                </a>

                <a class="portfolio-btn" href="img/hijau.webp" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>

    </div>

</div>
<!-- Testimonial End -->


    


    <!-- Testimonial Start -->
        <div class="container-fluid py-5 px-5">
    <div class="row">
        <div class="col-12 text-left mb-5">
            <h1 class="display-5 text-uppercase mb-3">POTENSI DESA</h1>
            <p style="max-width: 700px; font-size: 1rem;">
                Informasi desa mencakup perkembangan di bidang ekonomi, pariwisata, pertanian, industri kreatif, serta upaya pelestarian lingkungan untuk mendukung kemajuan dan keberlanjutan desa.
            </p>
        </div>
    </div>

    <div class="row g-4">
        
        <div class="col-md-6 text-center">
            <img class="img-fluid" src="{{ asset('assets/img/petak.jpeg') }}" alt="Air Terjun Potensi Desa" style="max-height: 300px; width: 100%; object-fit: cover;">
            </div>
        
        <div class="col-md-6 text-center">
            <img class="img-fluid" src="{{ asset('assets/img/air.jpeg') }}" alt="Petani di Sawah Potensi Desa" style="max-height: 300px; width: 100%; object-fit: cover;">
            </div>
        
    </div>
        </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
  <div class="container-fluid py-6 px-5" style="background-color: white;">
    <div class="text-center mx-auto mb-5" style="max-width: 800px;">
        <h1 class="display-5 text-uppercase mb-3" style="color: #000080;">BERITA DESA</h1>
        <p style="font-size: 1.1rem; color: #333;">
            MENYAJIKAN INFORMASI TERBARU TENTANG PERISTIWA, BERITA TERKINI 
            DAN ARTIKEL-ARTIKEL JURNALISTIK DARI DESA TAMANG
        </p>
    </div>

    <div class="row g-4 justify-content-center">
        
        <div class="col-lg-4 col-md-6">
            <div class="card h-100" style="border: none; background-color: white;">
                <img class="card-img-top img-fluid" src="{{ asset('assets/img/blog-1.jpg') }}" alt="Gambar Berita 1" style="height: 250px; object-fit: cover;">
                <div class="card-body p-4">
                    <p class="card-text mb-2" style="font-size: 0.85rem; color: #a00000;">
                        <i class="far fa-calendar-alt"></i> 01 Jan, 2045
                    </p>
                    <h5 class="card-title mb-3" style="font-size: 1.1rem; font-weight: bold; color: black;">
                        Desa Kujangsari Jadi Pusat Eduwisata Peternakan Terpadu di Kota Banjar
                    </h5>
                   
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="card h-100" style="border: none; background-color: white;">
                <img class="card-img-top img-fluid" src="{{ asset('assets/img/bantuan.jpg') }}" alt="Gambar Berita 2" style="height: 250px; object-fit: cover;">
                <div class="card-body p-4">
                    <p class="card-text mb-2" style="font-size: 0.85rem; color: #a00000;">
                        <i class="far fa-calendar-alt"></i> 23 Juli, 2015
                    </p>
                    <h5 class="card-title mb-3" style="font-size: 1.1rem; font-weight: bold; color: black;">
                        Desa Kujangsari Kota Banjar Sulap Limbah Sapi Menjadi Biogas
                   
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="card h-100" style="border: none; background-color: white;">
                <img class="card-img-top img-fluid" src="{{ asset('assets/img/30.jpg') }}" alt="Gambar Berita 3" style="height: 250px; object-fit: cover;">
                <div class="card-body p-4">
                    <p class="card-text mb-2" style="font-size: 0.85rem; color: #a00000;">
                        <i class="far fa-calendar-alt"></i> 18 April, 2020
                    </p>
                    <h5 class="card-title mb-3" style="font-size: 1.1rem; font-weight: bold; color: black;">
                        Pemerintah Desa Kujangsari Salurkan Bantuan Untuk Lansia.
                    </h5>
                   
                </div>
            </div>
        </div>
        
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <a href="berita" class="text-decoration-none">
                <div class="d-flex align-items-center justify-content-center p-4 shadow-sm" style="border: 1px solid #ddd; background-color: white;">
                    <i class="fa fa-2x fa-arrow-right text-primary me-3"></i>
                    <h4 class="text-uppercase mb-0" style="color: black;">Lihat Lebih Detail</h4>
                </div>
            </a>
        </div>
    </div>
    </div>
    <!-- Blog End -->
    

    <!-- Footer Start -->
    <div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>DESA KUJANGSARI</h1>
                </a>
                
                <p><i class="fa fa-map-marker-alt me-2"></i>123 Kujangsari</p>
                <p><i class="fa fa-phone-alt me-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope me-2"></i>infomasi@webdesa.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets/https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}lib/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>