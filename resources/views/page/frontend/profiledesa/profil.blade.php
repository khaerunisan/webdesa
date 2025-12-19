<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Profil Desa - Sejarah, Visi & Misi, Bagan, dan Lokasi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        body {
            margin: 0;
            background-color: #e8b6b6;
        }

        /* --- CONTAINER UTAMA (Digunakan untuk Lokasi dan Sejarah) --- */
        .main-content-container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto; /* Memberi jarak atas dan bawah antar container */
            padding: 40px;
            background: white;
            border-radius: 10px;
            border: 1px solid #d0d0d0;
        }

        .section-title {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            color: #c26b6b;
            margin-bottom: 30px;
        }

        /* --- SEJARAH DESA (di dalam main-content-container) --- */
        .sejarah-img {
            width: 60%;
            display: block;
            margin: 0 auto 30px auto;
            border-radius: 8px;
        }

        .sejarah-text {
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 0;
        }

        /* --- LOKASI DESA (di dalam main-content-container) --- */
        .lokasi-desa-content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: flex-start;
        }

        .lokasi-info {
            flex: 1;
            min-width: 300px;
        }

        .lokasi-info ul {
            padding-left: 20px;
        }
        
        .lokasi-info ul li {
            margin-bottom: 5px;
        }

        .lokasi-map-container {
            flex: 1;
            min-width: 300px;
            text-align: center;
        }

        .lokasi-map {
            max-width: 100%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .lokasi-info p {
            font-size: 16px;
            line-height: 1.6;
        }


        /* BOX VISI MISI */
        .visi-misi-box {
            width: 80%;
            margin: 40px auto;
            background-color: #dcdcdc;
            padding: 40px;
            border-radius: 10px;
        }

        .visi-misi-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .visi-misi-box p,
        .visi-misi-box li {
            font-size: 16px;
            line-height: 1.7;
        }

        /* BAGAN */
        .bagan-container {
            width: 90%;
            max-width: 1300px;
            margin: 60px auto;
            background: white;
            padding: 50px 20px;
            border-radius: 10px;
            text-align: center;
        }

        .bagan-row {
            display: flex;
            gap: 40px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .bagan-box {
            width: 480px;
            padding: 25px;
            background: #fff;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        .bagan-box img {
            width: 100%;
            border-radius: 8px;
        }
        
        @media (max-width: 768px) {
            .lokasi-desa-content {
                flex-direction: column;
            }
            .lokasi-info, .lokasi-map-container {
                min-width: 100%;
            }
        }
    </style>
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


   


    <div class="visi-misi-box">
        <h2>VISI</h2>
        <p>
           "Mewujudkan Desa Kujangsari yang Unggul, Inovatif, dan Berdaya Saing
            melalui Peningkatan Sumber Daya Manusia (SDM) dan Tata Kelola Pemerintahan
             Desa yang Bersih dan Profesional untuk Kesejahteraan Masyarakat."
        </p>
    </div>

    <div class="visi-misi-box">
        <h2>MISI</h2>
        <ol>
            <li> Meningkatkan Kualitas Pelayanan Publik:
                 Mewujudkan tata kelola pemerintahan desa yang efektif, efisien, transparan, dan akuntabel, serta memberikan pelayanan terbaik kepada masyarakat Kujangsari.</li>

            <li>Pembangunan Infrastruktur Berkelanjutan:
                 Melaksanakan pembangunan sarana dan prasarana fisik dan non-fisik desa secara merata dan berkelanjutan, yang mendukung aktivitas ekonomi dan sosial warga.</li>

            <li>Pengembangan Ekonomi Lokal: 
                Mendorong pertumbuhan ekonomi desa melalui pengembangan Badan Usaha Milik Desa (BUMDes), pemberdayaan kelompok UMKM, dan peningkatan potensi pertanian serta potensi lainnya.</li>

            <li>Peningkatan SDM dan Kualitas Hidup:
                 Meningkatkan derajat kesehatan, pendidikan, dan kesejahteraan masyarakat, serta melestarikan nilai-nilai budaya lokal, termasuk situs bersejarah Kujang Gerang.</li>
            
            <li>Memperkuat Ketertiban dan Keharmonisan:
                 Memelihara keamanan, ketertiban, dan kerukunan antar warga, serta mewujudkan lingkungan yang bersih dan lestari.</li>


        </ol>
    </div>

    <div class="bagan-container">
        <h1>Bagan Desa</h1>

        <div class="bagan-row">
            <div class="bagan-box">
                <h2>Struktur Organisasi Pemerintahan Desa</h2>
                <img src="{{ asset('assets/img/bagansatu.jpeg') }}" alt="Bagan Pemerintahan Desa">
            </div>

            <div class="bagan-box">
                <h2>Struktur Organisasi Badan Permusyawaratan Desa</h2>
                <img src="{{ asset('assets/img/bagandua.jpeg') }}" alt="Bagan BPD">
            </div>
        </div>
    </div>

     <div class="main-content-container" id="sejarah-desa">
        <h1 class="section-title">SEJARAH DESA KUJANGSARI</h1>

        <img src="{{ asset('assets/img/sejarah.jpeg') }}" class="sejarah-img" alt="Foto Desa">

        <p class="sejarah-text">
            Desa Kujangsari di Kecamatan Langensari, Kota Banjar, resmi berdiri pada tahun 1978 berdasarkan SK 
            Gubernur Jawa Barat. Desa ini merupakan hasil pemekaran dari Desa Mulyasari. Nama "Kujangsari"  berasal dari pusaka Kujang Gerang
             serta sosok Eyang Kujang Gerang yang meninggalkan situs mata air 
            dan batu tapak bersejarah, yang kemudian dipindahkan ke Museum Pusaka Galuh pada tahun 2015.
            <br><br>
            Desa Kujangsari saat ini terdiri dari lima dusun. Desa ini berdiri dengan visi mewujudkan 
            masyarakat yang unggul, mengayomi, beriman, bermartabat, dan sejahtera.
        </p>
    </div>

     <div class="main-content-container" id="lokasi-desa">
        <h1 class="section-title">LOKASI DESA KUJANGSARI</h1>

        <div class="lokasi-desa-content">
            <div class="lokasi-info">
                
                <h3>Informasi Geografis</h3>
                
                <p>
                    Batas Desa:
                    <ul>
                        <li> Utara: Desa Bojongkantong</li>
                        <li> Timur: Desa Kalapasawit</li>
                        <li> Selatan: Desa Puloreang</li>
                        <li> Barat: Desa Mulyasari</li>
                    </ul>
                </p>
                <p>
                    Luas Wilayah: Sekitar 4,21 km²  (setara dengan 421 hektar).
                </p>
                <p>
                    Jumlah Penduduk: 12.432 Jiwa (data profil desa).
                </p>
            </div>
            
            <div class="lokasi-map-container">
                <img src="{{ asset('assets/img/peta.jpeg') }}" class="lokasi-map" alt="Peta Desa Kujangsari">
                <p style="font-size: 14px; color: #777; margin-top: 10px;">Peta Administrasi Desa Kujangsari</p>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>