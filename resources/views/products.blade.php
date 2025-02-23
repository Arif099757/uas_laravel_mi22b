<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
</head>
<body>
    <header>
        <h1>TOKO ELEKTRONIK</h1>
        <nav>
            <ul>
                <li><a href="/">Kembali</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Katalog Produk</h2>
        <ul>
            @foreach($products as $product)
                <li>
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>