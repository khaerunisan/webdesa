<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotak Saran</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 700px;
            background: #fff;
            margin: 40px auto;
            padding: 30px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            color: #c72f3c;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #d0d0d0;
            border-radius: 4px;
            font-size: 14px;
        }

        textarea {
            height: 130px;
        }

        button {
            background: #0c1a33;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 4px;
            font-size: 15px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: .85;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>KOTAK SARAN DAN PENGADUAN</h1>

    <!-- BENAR: routing tanpa minus -->
    @if(session('success'))
        <p style="color: green; text-align:center;">
            {{ session('success') }}
        </p>
    @endif

    <form action="/kotaksaran/kirim" method="POST">
        @csrf

        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan nama Anda">

        <label>Email</label>
        <input type="email" name="email" placeholder="Masukkan email">

        <label>Saran / Masukan</label>
        <textarea name="pesan" placeholder="Tulis saran Anda di sini..."></textarea>

        <button type="submit">KIRIM</button>
    </form>
</div>

</body>
</html>
