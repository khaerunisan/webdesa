@extends('layouts.backend.app')

@section('content')

<style>
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

    <h2>Daftar Berita</h2>

    <a href="{{ route('berita.create') }}" class="btn-tambah">+ Tambah Berita</a>

    <table>
        <tr>
            <th>Judul Berita</th>
            <th>Images</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>

        @forelse ($berita as $item)
        <tr>
            <td>{{ $item->judul }}</td>

            <td>
                <img src="{{ asset('storage/' . $item->gambar) }}" alt="">
            </td>

            <td style="max-width: 350px;">
                {{ Str::limit($item->deskripsi, 80) }}
            </td>

            <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}</td>

            <td>
                <div class="aksi">
                    <a href="{{ route('berita.show', $item->id) }}" class="detail">Detail</a>

                    <a href="{{ route('berita.edit', $item->id) }}" class="edit">Edit</a>

                    <form action="{{ route('berita.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="delete" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                    </form>
                </div>
            </td>
        </tr>

        @empty
        <tr>
            <td colspan="5">Belum ada berita.</td>
        </tr>
        @endforelse

    </table>

</div>

@endsection
