@extends('layouts.backend.app')

@section('content')
<style>
    /* Background luar */
    .figma-bg {
        background: #d9c0c2 !important;
        padding: 50px 0;
        width: 100%;
        min-height: 100vh;
    }

    /* Box utama */
    .figma-box {
        width: 900px;
        background: #ffffff !important;
        margin: 0 auto;
        border-radius: 6px;
        box-shadow: 0 0 4px rgba(0,0,0,0.15);
        overflow: hidden;
    }

    /* Header biru */
    .figma-header {
        background: #4a88b7;
        padding: 20px 28px;
        font-size: 22px;
        font-weight: bold;
        color: #fff;
    }

    /* Isi form */
    .figma-body {
        padding: 30px;
    }

    .figma-label {
        font-weight: bold;
        font-size: 15px;
        display: block;
        margin-bottom: 6px;
    }

    .figma-input {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #b8b8b8;
        margin-bottom: 20px;
        font-size: 14px;
        background: white !important;
    }

    .figma-textarea {
        width: 100%;
        height: 250px;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #b8b8b8;
        font-size: 14px;
        resize: vertical;
        background: white !important;
    }

    /* Tombol */
    .figma-btn-area {
        text-align: right;
        margin-top: 25px;
    }

    .figma-btn-cancel {
        background: #e0e0e0;
        padding: 8px 25px;
        border-radius: 4px;
        border: none;
        font-size: 14px;
        margin-right: 10px;
        cursor: pointer;
    }

    .figma-btn-save {
        background: #4a88b7;
        padding: 8px 25px;
        border-radius: 4px;
        color: white;
        border: none;
        font-size: 14px;
        cursor: pointer;
    }

    /* MATIKAN efek Dark/Bootstrap */
    .figma-box input,
    .figma-box textarea,
    .figma-box button {
        box-shadow: none !important;
        outline: none !important;
    }
</style>

<div class="figma-bg">

    <div class="figma-box">

        <div class="figma-header">
            Tambah PPID
        </div>

        <div class="figma-body">

            <label class="figma-label">Judul</label>
            <input type="text" class="figma-input" value="Layanan Informasi Publik">

            <label class="figma-label">Isi PPID</label>
            <textarea class="figma-textarea">Layanan Informasi Publik merupakan bentuk keterbukaan Pemerintah Desa dalam menyediakan akses informasi bagi masyarakat.

Melalui PPID Desa, setiap warga berhak untuk:
- Mendapatkan informasi mengenai penyelenggaraan pemerintahan desa.
- Mengajukan permohonan informasi secara resmi.
- Mendapatkan jawaban informasi secara cepat, tepat, dan sederhana.

PPID Desa bertanggung jawab untuk:
1. Mengelola dan menginventarisasi seluruh informasi publik.
2. Menyediakan informasi yang wajib diumumkan secara berkala.
3. Memberikan informasi yang wajib diumumkan kepada masyarakat.
4. Menjamin tersedianya informasi yang diperlukan dalam pelayanan publik.</textarea>

            <div class="figma-btn-area">
                <button class="figma-btn-cancel">Batal</button>
                <button class="figma-btn-save">Simpan</button>
            </div>

        </div>
    </div>

</div>

@endsection
