<!DOCTYPE html>
<html lang="en">
<head>
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
                    <a href="index.html" class="nav-item nav-link ">Home</a>
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

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPID & Dasar Hukum</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #ffffff; /* BACKGROUND PUTIH */
            font-family: Arial, sans-serif;
        }

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

        /* Box putih */
        .content-box {
            background: #ffffff;
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            border-radius: 3px;
            border: 1px solid #dfdfdf;
        }

        /* Bar biru di atas box */
        .top-bar {
            width: calc(100% + 60px);
            height: 40px;
            background: #0c1a33;
            margin-top: -30px;
            margin-left: -30px;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        h1 {
            color: black;
            font-size: 35px;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .subtitle {
            color: black;
            font-size: 14px;
            margin-top: -5px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        p {
            font-size: 14px;
            line-height: 1.6;
            font-weight: 600;
            color: #000;
        }

        .btn {
            background: #8bb6a4;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 3px;
            font-size: 13px;
            cursor: pointer;
        }

        .btn:hover {
            opacity: .8;
        }

        .section-title {
            color: black;
            font-weight: bold;
            font-size: 18px;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        ol {
            font-size: 14px;
            margin-left: 18px;
            line-height: 1.7;
        }

        /* ======== STYLE DAFTAR BERKAS ======== */

        .card {
            border: 1px solid #e1e1e1;
            padding: 20px;
            border-radius: 4px;
            margin-bottom: 25px;
        }

        .card-title {
            font-weight: bold;
            font-size: 15px;
        }

        .info {
            font-size: 13px;
            margin-top: 5px;
            color: #333;
        }

        .buttons {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }

        .btn-gray {
            background: #dcdcdc;
            border: 1px solid #c2c2c2;
            padding: 10px 20px;
            border-radius: 3px;
            font-size: 13px;
            cursor: pointer;
        }

        .btn-gray:hover {
            background: #cfcfcf;
        }
    </style>

</head>


<body>
    

    <!-- =============== BAGIAN 1: PPID ================== -->
    <div class="content-box">
        <div class="top-bar"></div>

        <h1>PPID</h1>

        <p>
            Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang
            bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan,
            dan/atau pelayanan informasi di badan publik.
        </p>



    </div>


    <!-- =============== BAGIAN 2: DASAR HUKUM ================== -->
    <div class="content-box">
        <div class="top-bar"></div>

        <h1>DASAR HUKUM</h1>
        <div class="subtitle">YANG MENDASARI PEMBENTUKAN PPID</div>

        <div class="section-title">UNDANG UNDANG REPUBLIK INDONESIA</div>
        <ol>
            <li>Undang-Undang Nomor 14 Tahun 2008 Tentang Keterbukaan Informasi Publik</li>
            <li>Undang-Undang Nomor 25 Tahun 2009 Tentang Pelayanan Publik</li>
            <li>Undang-Undang Nomor 6 Tahun 2014 Tentang Desa</li>
        </ol>

        <div class="section-title">PERATURAN PEMERINTAH</div>
        <ol>
            <li>Peraturan Pemerintah Nomor 61 Tahun 2010 Tentang Pelaksanaan Undang-Undang Nomor 14 Tahun 2008 Tentang Keterbukaan Informasi Publik</li>
        </ol>

        <div class="section-title">PERATURAN KOMISI INFORMASI</div>
        <ol>
            <li>Peraturan Komisi Informasi Nomor 1 Tahun 2010 tentang Standar Layanan Informasi Publik</li>
            <li>Peraturan Komisi Informasi Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi Publik</li>
            <li>Peraturan Komisi Informasi Nomor 7 Tahun 2017 tentang Pengklasifikasian Informasi Publik</li>
            <li>Peraturan Komisi Informasi Nomor 1 Tahun 2018 tentang Standar Layanan Informasi Publik Desa</li>
            <li>Peraturan Komisi Informasi Nomor 1 Tahun 2021 tentang Standar Layanan Informasi Publik</li>
        </ol>

        <div class="section-title">PERATURAN MENTERI DALAM NEGERI</div>
        <ol>
            <li>Peraturan Menteri Dalam Negeri Nomor 114 Tahun 2018 Tentang Keterbukaan Informasi Publik</li>
        </ol>
    </div>


    <!-- =============== BAGIAN 3: DAFTAR BERKAS ================== -->
    <div class="content-box">
        <div class="top-bar"></div>

        <div class="card">
            <div class="card-title">SURAT KETERANGAN DOMISILI</div>
            <div class="info">📄 Rencana Kerja Pemerintah Desa</div>
            <div class="info">📅 Jumat, 8 Agustus 2025</div>

            <div class="buttons">
                <a href="hukum" class="btn-link btn-gray">
                    🔎 Lihat Berkas
                </a>
                
               
            </div>
        </div>

        <div class="card">
            <div class="card-title">SURAT KETERANGAN PINDAH / DATANG</div>
            <div class="info">📄 Data Administrasi Penduduk</div>
            <div class="info">📅 SEnin, 12 Agustus 2025</div>

            <div class="buttons">
                    <a href="berkas" class="btn-link btn-gray">
                        🔎 Lihat Berkas
                    </a>
                    
                    
            </div>
        </div>

        <div class="card">
            <div class="card-title">SURAT KETERANGAN USAHA</div>
            <div class="info">📄 Pendataan Pelaku UMKM Desa</div>
            <div class="info">📅 Rabu, 14 Agustus 2025</div>

            <div class="buttons">
                    <a href="dokumen" class="btn-link btn-gray">
                        🔎 Lihat Berkas
                    </a>
                    
                   
            </div>
        </div>
    </div>

</body>
</html>
