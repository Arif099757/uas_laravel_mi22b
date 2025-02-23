@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Produk</h1>
    <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_produk">Kode Produk</label>
            <input type="text" class="form-control" name="kode_produk" id="kode_produk" value="{{ $produk->kode_produk }}">
        </div>
        <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="{{ $produk->nama_produk }}" required>
        </div>
        <div class="form-group">
            <label for="kategori_id">Kategori</label>
            <select class="form-control" name="kategori_id" id="kategori_id" required>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" {{ $kategori->id == $produk->kategori_id ? 'selected' : '' }}>{{ $kategori->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi">{{ $produk->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar (opsional)</label>
            <input type="file" class="form-control" name="gambar" id="gambar">
            @if ($produk->gambar)
                <img src="{{ asset('storage/' . $produk->gambar) }}" width="100" alt="Gambar Produk">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection