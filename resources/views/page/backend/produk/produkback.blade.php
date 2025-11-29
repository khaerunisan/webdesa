@extends('layouts.backend.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Penawaran</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #D8AFAF; /* warna pink background seperti figma */
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 40px auto;
        }

        h1 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #000;
        }

        .card {
            background: #8AB7C4; /* warna biru card */
            padding: 30px;
            display: flex;
            gap: 30px;
            border-radius: 4px;
            width: 100%;
        }

        .card img {
            width: 230px;
            height: 230px;
            object-fit: cover;
            background: #fff;
            border-radius: 3px;
        }

        .right {
            flex: 1;
            color: #fff;
        }

        .right h2 {
            margin: 0;
            font-size: 26px;
            font-weight: bold;
        }

        .price {
            margin-top: 5px;
            font-size: 18px;
            font-weight: bold;
        }

        .desc {
            margin-top: 10px;
            line-height: 1.5;
            font-size: 15px;
            width: 80%;
        }

        .aksi-title {
            margin-top: 20px;
            font-weight: bold;
            font-size: 17px;
        }

        .btn-wrap {
            margin-top: 10px;
        }

        .btn {
            padding: 4px 10px;
            font-size: 13px;
            border-radius: 3px;
            color: white;
            text-decoration: none;
            margin-right: 5px;
        }

        .btn-detail { background: #4E7EC9; }
        .btn-edit { background: #EFB73E; }
        .btn-delete { background: #D9534F; }

        .btn-add {
            float: right;
            margin-top: -10px;
            margin-bottom: 10px;
            background: #5090D8;
            padding: 6px 12px;
            color: white;
            font-size: 13px;
            border-radius: 3px;
            text-decoration: none;
        }
    </style>

</head>
<body>

    <div class="container">

        <h1>Produk Penawaran</h1>

        <a class="btn-add" href="#">+ Tambah Produk</a>

        <div class="card">
            <img src="gambar-produk.jpg">

            <div class="right">
                <h2>Keripik Jamur</h2>
                <div class="price">Rp 15.000</div>

                <div class="desc">
                    “Keripik jamur dengan tekstur renyah dan cita rasa gurih yang khas.
                    Cocok sebagai camilan di rumah maupun pendamping usaha makanan,
                    serta memiliki nilai jual tinggi bagi UMKM kuliner.”
                </div>

                <div class="aksi-title">Aksi</div>

                <div class="btn-wrap">
                    <a class="btn btn-detail" href="#">Detail</a>
                    <a class="btn btn-edit" href="#">Edit</a>
                    <a class="btn btn-delete" href="#">Delete</a>
                </div>
            </div>
        </div>

    </div>

</body>
</html>





@endsection