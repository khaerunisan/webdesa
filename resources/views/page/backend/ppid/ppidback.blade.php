@extends('layouts.backend.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPID & Dasar Hukum</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #ffffff;
        }

        .container {
            width: 80%;
            margin: 50px auto;
        }

        /* BAGIAN PPID */
        .ppid-title {
            font-size: 32px;
            font-weight: bold;
            color: #d9534f;
        }

        .ppid-desc {
            margin-top: 5px;
            font-size: 15px;
            line-height: 1.6;
            color: #333;
            max-width: 700px;
        }

        .btn-hukum {
            margin-top: 20px;
            padding: 10px 18px;
            border-radius: 6px;
            border: 2px solid #d9534f;
            color: #d9534f;
            background: transparent;
            font-weight: bold;
            cursor: pointer;
        }

        /* BAGIAN DASAR HUKUM */
        .judul-hukum {
            margin-top: 70px;
            font-size: 30px;
            font-weight: bold;
            color: #d9534f;
        }

        .subjudul {
            margin-top: -5px;
            color: #999;
            font-size: 14px;
        }

        .box {
            margin-top: 30px;
            border-radius: 10px;
            background: #f8f8f8;
            padding: 35px 40px;
            border: 1px solid #ddd;
        }

        .section-title {
            color: #5cb85c;
            font-weight: bold;
            font-size: 18px;
        }

        .list {
            margin-top: 10px;
            padding-left: 18px;
            line-height: 1.7;
            font-size: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- BAGIAN PPID -->
    <h1 class="ppid-title">PPID</h1>

    <p class="ppid-desc">
        PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI (PPID) ADALAH PEJABAT YANG
        BERTANGGUNGJAWAB DI BIDANG PENYIMPANAN, PENDOKUMENTASIAN, PENYEDIAAN,
        DAN/ATAU PELAYANAN INFORMASI DI BADAN PUBLIK.
    </p>

    <button class="btn-hukum">DASAR HUKUM PPID</button>

    <!-- BAGIAN DASAR HUKUM -->
    <h1 class="judul-hukum">DASAR HUKUM</h1>
    <p class="subjudul">YANG MENDASARI PEMBENTUKAN PPID</p>

    <div class="box">

        <h3 class="section-title">PERATURAN PEMERINTAH</h3>
        <ul class="list">
            <li>Peraturan pemerintah nomor 61 tahun 2010 tentang pelaksanaan undang undang nomor 14 tahun 2008 tentang keterbukaan informasi publik</li>
        </ul>

        <h3 class="section-title" style="margin-top: 35px;">PERATURAN KOMISI INFORMASI</h3>
        <ul class="list">
            <li>Peraturan Komisi Informasi pusat republik Indonesia nomor 1 tahun 2010 tentang standar layanan informasi publik</li>
            <li>Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2013 tentang Prosedur Penyelesaian Sengketa Informasi Publik</li>
            <li>Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2017 tentang Pengklasifikasian Informasi Publik</li>
            <li>Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2018 tentang Standar layanan Informasi Publik Desa</li>
            <li>Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2021 tentang Standar Layanan Informasi Publik</li>
        </ul>

        <h3 class="section-title" style="margin-top: 35px;">PERATURAN MENTERI DALAM NEGERI</h3>
        <ul class="list">
            <li>Terkait pelaksanaan Undang-undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.</li>
        </ul>

    </div>

</div>

</body>
</html>







@endsection