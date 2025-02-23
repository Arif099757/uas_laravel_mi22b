<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 200px;
            background: #333;
            padding: 20px;
            color: white;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
            background: #444;
            border-radius: 5px;
            text-align: center;
        }

        .sidebar a:hover {
            background: #555;
        }

        .content {
            flex: 1;
            padding: 20px;
            background: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h1 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        form {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        .btn {
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .btn-back {
            background: gray;
            color: white;
        }

        .btn-save {
            background: #007bff;
            color: white;
        }

        .btn-save:hover {
            background: #0056b3;
        }

    </style>
</head>
<body>

    <div class="sidebar">
        <a href="admin">Beranda</a>
        <a href="#">Produk</a>
        <a href="admin">User</a>
    </div>

    <div class="content">
        <h1>Tambah Kategori</h1>
        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            <label for="nama_kategori">Nama Kategori:</label>
            <input type="text" name="nama_kategori" id="nama_kategori" required>
            
            <div class="button-container">
                <a href="{{ route('kategori.index') }}" class="btn btn-back">Kembali</a>
                <button type="submit" class="btn btn-save">Simpan Kategori</button>
            </div>
        </form>
    </div>

</body>
</html>
