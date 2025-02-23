@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
            <tr>
                <td>{{ $produk->id }}</td>
                <td>{{ $produk->kode_produk }}</td>
                <td>{{ $produk->nama_produk }}</td>
                <td>{{ $produk->kategori->nama_kategori }}</td>
                <td>{{ $produk->deskripsi }}</td>
                <td>
                    @if ($produk->gambar)
                        <img src="{{ asset('storage/' . $produk->gambar) }}" width="100">
                    @endif
                </td>
                <td>
                    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection