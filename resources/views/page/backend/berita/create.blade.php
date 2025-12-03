@extends('layouts.backend.app')

@section('content')

<style>
    body {
        background: #e6d9d7 !important;
        font-family: Arial, sans-serif;
    }

    .header-custom {
        background: #5aa0d6;
        padding: 18px 40px;
        font-size: 26px;
        font-weight: bold;
        color: #0b2a3d;
        margin-left: -20px;
        margin-right: -20px;
        margin-top: -20px;
    }

    .form-container {
        width: 75%;
        margin: 30px auto;
        background: transparent;
        padding-bottom: 40px;
    }

    label {
        display: block;
        font-size: 15px;
        margin-bottom: 6px;
        color: #0c2d4c;
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"],
    textarea,
    input[type="file"] {
        width: 100%;
        padding: 14px;
        border: 1px solid #bcbcbc;
        border-radius: 3px;
        font-size: 14px;
        background: #ffffff;
    }

    textarea {
        height: 120px;
        resize: none;
    }

    .button-area {
        margin-top: 35px;
        text-align: right;
    }

    .btn {
        padding: 10px 26px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        font-size: 15px;
        margin-left: 10px;
    }

    .btn-batal {
        background: #f1e8e8;
    }

    .btn-simpan {
        background: #5aa0d6;
        color: white;
    }
</style>

<div class="header-custom">
    Tambah berita
</div>

<div class="form-container">

    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Judul Berita</label>
        <input type="text" name="judul" placeholder="Masukan judul berita" required>
        <br><br>

        <label>Deskripsi</label>
        <textarea name="deskripsi" placeholder="Masukan deskripsi berita" required></textarea>
        <br><br>

        <label>Gambar</label>
        <input type="file" name="gambar" required>
        <br><br>

        <label>Tanggal</label>
        <input type="date" name="tanggal" required>

        <div class="button-area">
            <a href="{{ route('berita.index') }}" class="btn btn-batal">Batal</a>
            <button type="submit" class="btn btn-simpan">Simpan</button>
        </div>
    </form>

</div>

@endsection
