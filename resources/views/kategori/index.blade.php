<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori</title>
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
            background: #f4f4f4;
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
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .add-category {
            margin-bottom: 15px;
        }

        .add-category a {
            background: #007bff;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 3px;
            display: inline-block;
        }

        .add-category a:hover {
            background: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background: white;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background: #007bff;
            color: white;
        }

        .edit-link {
            color: green;
            text-decoration: none;
            margin-right: 5px;
        }

        .edit-link:hover {
            text-decoration: underline;
        }

        .delete-form {
            display: inline;
        }

        .delete-form button {
            background: red;
            color: white;
            border: none;
            padding: 5px 8px;
            border-radius: 3px;
            cursor: pointer;
        }

        .delete-form button:hover {
            background: darkred;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <a href="admin">Beranda</a>
        <a href="#">Produk</a>
        <a href="tentang">Tentang</a>
        <a href="kategori">Kategori</a>
        <a href="admin">User</a>
    </div>

    <div class="content">
        <h1>Daftar Kategori</h1>

        <div class="add-category">
            <a href="{{ route('kategori.create') }}">+ Tambah Kategori</a>
            <a href="{{ route('home') }}" style="background: gray;">Kembali</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{ $kategori->id }}</td>
                        <td>{{ $kategori->nama_kategori }}</td>
                        <td>
                            <a href="{{ route('kategori.edit', $kategori->id) }}" class="edit-link">Edit</a>
                            <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
