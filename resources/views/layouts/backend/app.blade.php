<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('assetsbackend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsbackend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('assetsbackend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsbackend/css/style.css') }}" rel="stylesheet">

    <style>
        /* Tambahan agar navbar & content tidak menggantung */
        .main-content {
            margin-left: 250px; /* posisi default sidebar DarkPan */
            padding: 20px;
            margin-top: 80px; /* jarak aman dari navbar */
        }
    </style>
</head>

<body>

    {{-- Sidebar (TIDAK DIUBAH) --}}
    @include('layouts.backend.sidebar')

    {{-- Navbar (TIDAK DIUBAH) --}}
    @include('layouts.backend.navbar')

    {{-- WRAPPER KONTEN FIX --}}
    <div class="main-content">
        @yield('content')
    </div>


    <!-- Footer tetap aman -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                </div>
                <div class="col-12 col-sm-6 text-center text-sm-end">
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsbackend/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assetsbackend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script src="{{ asset('assetsbackend/js/main.js') }}"></script>
</body> 

</html>
