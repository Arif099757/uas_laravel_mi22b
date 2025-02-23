@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Produk</h1>
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="kode_produk">Kode Produk</label>
            <input type="text" class="form-control" name="kode_produk" id="kode_produk">
        </div>
        <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk" id="nama_produk" required>
        </div>
        <div class="form-group">
            <label for="kategori_id">Kategori</label>
            <select class="form-control" name="kategori_id" id="kategori_id" required>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
        </div>
        <div class=" form-group">
            <label for="gambar">Gambar (opsional)</label>
            <input type="file" class="form-control" name="gambar" id="gambar">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection