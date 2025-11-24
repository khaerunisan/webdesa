@extends('layouts.backend.app')

@section('content')

<style>
    /* HANYA CSS YANG DIPERLUKAN */
    .card-custom {
        width: 95%;
        background: white;
        margin: 20px auto;
        padding: 40px;
        border-radius: 10px;
    }

    .btn-tambah {
        background: #87c9ff;
        padding: 8px 12px;
        color: black;
        text-decoration: none;
        border-radius: 6px;
        float: right;
        margin-top: -20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 40px;
    }

    th, td {
        text-align: left;
        padding: 15px 5px;
        vertical-align: top;
    }

    td img {
        width: 75px;
        height: 55px;
        object-fit: cover;
        border-radius: 4px;
    }

    .aksi {
        display: flex;
        gap: 8px;
        margin-top: 5px;
    }

    .aksi a,
    .aksi button {
        padding: 6px 10px;
        font-size: 13px;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        border: none;
        color: white;
    }

    .detail { background: #64a9ff; }
    .edit { background: #ffd363; color: black !important; }
    .delete { background: #ff4b4b; }
</style>



<div class="card-custom">

    <h2>Daftar berita</h2>

    <a href="{{ route('berita.create') }}" class="btn-tambah">+ Tambah berita</a>

    <table>
        <tr>
            <th>Judul Berita</th>
            <th>Images</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>

        {{-- Contoh data statis (nanti diganti dari database) --}}
        <tr>
            <td>Gotong royong bersama warga</td>
            <td><img src="https://via.placeholder.com/75x55"></td>
            <td>Warga bergotong royong membersihkan saluran air di pinggir jalan desa.</td>
            <td>12 oktober 2025</td>
            <td>
                <div class="aksi">
                    <a href="{{ route('berita.show', 1) }}" class="detail">Detail</a>
                    <a href="{{ route('berita.edit', 1) }}" class="edit">Edit</a>

                    <form action="{{ route('berita.destroy', 1) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                    </form>
                </div>
            </td>
        </tr>

        <tr>
            <td>peresmian balai desa</td>
            <td><img src="https://via.placeholder.com/75x55"></td>
            <td>Perangkat desa mengikuti acara atau rapat resmi pemerintahan desa.</td>
            <td>5 oktober 2025</td>
            <td>
                <div class="aksi">
                    <a href="{{ route('berita.show', 2) }}" class="detail">Detail</a>
                    <a href="{{ route('berita.edit', 2) }}" class="edit">Edit</a>

                    <form action="{{ route('berita.destroy', 2) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                    </form>
                </div>
            </td>
        </tr>

        <tr>
            <td>kegiatan posyandu di desa</td>
            <td><img src="https://via.placeholder.com/75x55"></td>
            <td>Kegiatan Posyandu, ibu dan anak menerima pelayanan kesehatan serta pembagian PMT.</td>
            <td>20 oktober 2024</td>
            <td>
                <div class="aksi">
                    <a href="{{ route('berita.show', 3) }}" class="detail">Detail</a>
                    <a href="{{ route('berita.edit', 3) }}" class="edit">Edit</a>

                    <form action="{{ route('berita.destroy', 3) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                    </form>
                </div>
            </td>
        </tr>

    </table>

</div>

@endsection
