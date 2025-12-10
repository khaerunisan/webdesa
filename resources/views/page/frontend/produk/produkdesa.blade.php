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
                         alt="{{ $item->nama_produk }}">

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
