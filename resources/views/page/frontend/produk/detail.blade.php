<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Detail Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .produk-image {
            width: 100%;
            height: 450px;              /* ✅ GAMBAR BESAR */
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <a href="{{ route('produkdesa') }}" class="btn btn-secondary mb-4">
        ← Kembali ke Produk
    </a>

    <div class="row g-4">

        <!-- GAMBAR PRODUK (BESAR) -->
        <div class="col-md-12">
            <img src="{{ asset('uploads/produk/' . $produk->gambar) }}"
                 class="produk-image"
                 alt="{{ $produk->nama }}">
        </div>

        <!-- DETAIL PRODUK -->
        <div class="col-md-12">
            <h2 class="mt-4">{{ $produk->nama }}</h2>

            <p class="text-muted">
                <i class="far fa-calendar-alt"></i>
                {{ $produk->created_at }}
            </p>

            <h5>Deskripsi Produk</h5>
            <p>{{ $produk->deskripsi }}</p>

            <h4 class="text-primary">
                Rp {{ number_format($produk->harga, 0, ',', '.') }}
            </h4>
        </div>

    </div>

</div>

</body>
</html>
