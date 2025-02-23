<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        * {
         /* Reset default styling */
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

.stats {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.stat-box {
    width: 150px;
    background: #eee;
    padding: 20px;
    text-align: center;
    border-radius: 5px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
}

.stat-box h3 {
    font-size: 18px;
}

.stat-box p {
    font-size: 22px;
    font-weight: bold;
}

form {
    margin-top: 20px;
}

button {
    padding: 10px 15px;
    background: red;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
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
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>

    <div class="content">
        <h1>Selamat datang, <strong>{{ $user->name }}</strong>!</h1>
        <div class="stats">
            <div class="stat-box">
                <h3>Produk</h3>
                <p>{{ $productCount }}</p>
            </div>
            <div class="stat-box">
                <h3>Kategori</h3>
                <p>{{ $categoryCount }}</p>
            </div>
            <div class="stat-box">
                <h3>User</h3>
                <p>{{ $userCount }}</p>
            </div>
        </div>
    </div>

</body>
</html>
