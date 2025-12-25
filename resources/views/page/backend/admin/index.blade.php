@php
    if (!session('isLogin')) {
        header('Location: ' . route('login'));
        exit;
    }
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assetsbackend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsbackend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assetsbackend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assetsbackend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
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
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>DAHSBOARD</a>
                    <a href="beritaback" class="nav-item nav-link" ><i class="fa fa-laptop me-2"></i>BERITA</a>
                    <a href="produkback" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Produk UMKM</a>
                    <a href="ppidback" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>PPID</a>
                    <a href="admin/kotaksaran" class="nav-item nav-link"><i class="fa fa-envelope me-2"></i>KOTAK SARAN</a>
                    <a href="{{ route('logout') }}"
                        class="nav-item nav-link"
                        onclick="return confirm('Yakin ingin logout?')">
                        <i class="fa fa-table me-2"></i>LOGOUT
                     </a>

                    
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    

                    <div class="nav-item dropdown">
                        
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


        <!-- Sale & Revenue Start -->
                <div class="container-fluid pt-4 px-4">

                    <!-- JUDUL DASHBOARD -->
                    <div class="bg-secondary rounded p-4 mb-4">
                        <h4 class="text-primary mb-1">Dashboard Admin Website Desa</h4>
                        <p class="mb-0">Pusat pengelolaan informasi, layanan publik, dan potensi desa</p>
                    </div>

                    <!-- STATISTIK UTAMA -->
                    <div class="row g-4 mb-4">

                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-secondary rounded p-4 text-center">
                                <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                <h3 class="mb-0">{{ $totalVisitor }}</h3>
                                <p class="mb-0">Pengunjung Website</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-secondary rounded p-4 text-center">
                                <i class="fa fa-newspaper fa-2x text-primary mb-2"></i>
                                <h3 class="mb-0">{{ $totalBerita }}</h3>
                                <p class="mb-0">Berita Desa</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-secondary rounded p-4 text-center">
                                <i class="fa fa-store fa-2x text-primary mb-2"></i>
                                <h3 class="mb-0">{{ $totalProduk }}</h3>
                                <p class="mb-0">Produk UMKM</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-secondary rounded p-4 text-center">
                                <i class="fa fa-file-alt fa-2x text-primary mb-2"></i>
                                <h3 class="mb-0">{{ $totalPPID }}</h3>
                                <p class="mb-0">Dokumen PPID</p>
                            </div>
                        </div>

                    </div>

                    <!-- INFORMASI SISTEM -->
                    <div class="row g-4 mb-4">
                        <div class="col-12">
                            <div class="bg-secondary rounded p-4">
                                <h5 class="text-primary mb-3">Informasi Sistem</h5>
                                <p style="text-align:justify;">
                                    Dashboard ini digunakan oleh Admin Desa untuk mengelola seluruh
                                    informasi dan layanan Website Desa, meliputi pengelolaan berita,
                                    transparansi informasi publik (PPID), promosi produk UMKM,
                                    serta menampung aspirasi masyarakat melalui kotak saran.
                                    Sistem ini bertujuan meningkatkan pelayanan publik dan
                                    keterbukaan informasi desa secara digital.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- DATA TERBARU -->
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="bg-secondary rounded p-4">
                                <h5 class="text-primary mb-3">Data Terbaru</h5>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dataTerbaru as $item)
                                            <tr>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->kategori }}</td>
                                                <td>{{ date('d F Y', strtotime($item->created_at)) }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
        <!-- Sale & Revenue End -->





            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsbackend/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assetsbackend/js/main.js') }}"></script>
</body> 

</html>