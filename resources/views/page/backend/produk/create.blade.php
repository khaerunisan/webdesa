@extends('layouts.backend.app')

@section('content')

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Produk</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #e6dede;
    }

    .header {
        background: #4a89c5;
        color: white;
        padding: 18px 20px;
        font-size: 22px;
        font-weight: bold;
    }

    .container {
        background: #e6dede;
        padding: 20px 40px;
    }

    label {
        font-weight: bold;
        margin-bottom: 6px;
        display: block;
        color: #1a3b5d;
    }

    input[type="text"],
    input[type="file"],
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #999;
        border-radius: 3px;
        box-sizing: border-box;
        margin-bottom: 25px;
        font-size: 15px;
    }

    textarea {
        height: 110px;
        resize: vertical;
    }

    .button-area {
        margin-top: 20px;
        display: flex;
        justify-content: flex-end;
        gap: 12px;
    }

    .btn-cancel {
        padding: 8px 18px;
        background: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-save {
        padding: 8px 18px;
        background: #6bb7d6;
        border: none;
        color: white;
        border-radius: 4px;
        cursor: pointer;
    }

</style>
</head>
<body>

<div class="header">
    Tambah produk
</div>

<div class="container">

    <label>Nama Produk</label>
    <input type="text" placeholder="kripik jamur">

    <label>Deskripsi produk</label>
    <textarea placeholder="Keripik jamur dengan tekstur renyah ..."></textarea>

    <label>Gambar</label>
    <input type="file">

    <label>Harga produk</label>
    <input type="text" placeholder="RP 15.000">

    <div class="button-area">
        <button class="btn-cancel">Batal</button>
        <button class="btn-save">Simpan produk</button>
    </div>

</div>

</body>
</html>
@endsection