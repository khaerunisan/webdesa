@extends('layouts.backend.app')

@section('content')

<div class="container" 
     style="width:80%; margin-top:-10px; margin-left:auto; margin-right:auto;">

    <h1 style="font-size:32px; font-weight:bold; margin-bottom:30px; color:#000;">
        Produk Penawaran
    </h1>

    <a class="btn-add" href="{{ route('produk.create') }}" 
        style="float:right; margin-top:-10px; margin-bottom:10px; background:#5090D8; padding:6px 12px; color:white; font-size:13px; border-radius:3px; text-decoration:none;">
        + Tambah Produk
    </a>

    @foreach ($produk as $item)
    <div class="card" style="background:#8AB7C4; padding:30px; display:flex; gap:30px; border-radius:4px; width:100%; margin-bottom:20px;">

        <!-- FOTO PRODUK 3 BERJEJER -->
        <div style="display:flex; flex-direction:row; gap:10px;">

            <img src="{{ asset('uploads/produk/'.$item->gambar) }}" 
                 style="width:230px; height:230px; object-fit:cover; background:#fff; border-radius:3px;">

            <img src="{{ asset('uploads/produk/'.$item->gambar) }}" 
                 style="width:230px; height:230px; object-fit:cover; background:#fff; border-radius:3px;">

            <img src="{{ asset('uploads/produk/'.$item->gambar) }}" 
                 style="width:230px; height:230px; object-fit:cover; background:#fff; border-radius:3px;">
        </div>
        <!-- END FOTO -->

        <div class="right" style="flex:1; color:#fff;">

            <h2 style="margin:0; font-size:26px; font-weight:bold;">
                {{ $item->nama_produk }}
            </h2>

            <div class="price" style="margin-top:5px; font-size:18px; font-weight:bold;">
                Rp {{ number_format($item->harga, 0, ',', '.') }}
            </div>

            <div class="desc" style="margin-top:10px; line-height:1.5; font-size:15px; width:80%;">
                {{ $item->deskripsi }}
            </div>  

            <div class="btn-wrap" style="margin-top:10px;">
                <a class="btn-detail" href="{{ route('produk.show', $item->id) }}" 
                    style="padding:4px 10px; font-size:13px; border-radius:3px; background:#4E7EC9; color:white; text-decoration:none;">Detail</a>

                <a class="btn-edit" href="{{ route('produk.edit', $item->id) }}" 
                    style="padding:4px 10px; font-size:13px; border-radius:3px; background:#EFB73E; color:white; text-decoration:none;">Edit</a>

                <form action="{{ route('produk.delete', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete" 
                        style="padding:4px 10px; font-size:13px; border-radius:3px; background:#D9534F; color:white; border:none;">
                        Delete
                    </button>
                </form>

            </div>

        </div>
    </div>
    @endforeach

</div>

@endsection
