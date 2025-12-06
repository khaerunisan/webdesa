<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Detail Berita Desa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        .berita-img {
            width: 100%;
            max-height: 450px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .berita-box {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 5px 20px rgba(0,0,0,0.1);
        }

        .tanggal {
            color: #0d6efd;
            font-weight: 600;
            margin-bottom: 15px;
            display: block;
        }

        .judul-berita {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .deskripsi {
            font-size: 18px;
            line-height: 1.7;
            margin-top: 15px;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <a href="/berita" class="btn btn-secondary mb-4">← Kembali ke Berita</a>

    <div class="berita-box">

        <img src="{{ asset('storage/' . $berita->gambar) }}" class="berita-img">

        <span class="tanggal">
            <i class="far fa-calendar-alt"></i>
            {{ \Carbon\Carbon::parse($berita->tanggal)->format('d F Y') }}
        </span>

        <h1 class="judul-berita">
            {{ $berita->judul }}
        </h1>

        <div class="deskripsi">
            {!! nl2br(e($berita->deskripsi)) !!}
        </div>

    </div>

</div>

</body>

</html>
