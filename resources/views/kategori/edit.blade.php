<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
</head>
<body>
    <h1>Edit Kategori</h1>
    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" name="nama_kategori" id="nama_kategori" value="{{ $kategori->nama_kategori }}" required>
        <button type="submit">Perbarui</button>
    </form>
    <a href="{{ route('kategori.index') }}">Kembali</a>
</body>
</html>