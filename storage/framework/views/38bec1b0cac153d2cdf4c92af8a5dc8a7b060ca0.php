<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TOKO ELEKTRONIK</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .nav {
            margin: 20px 0;
        }
        .nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
        }
        .catalog {
            max-width: 1000px;
            margin: 20px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .product-card {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .product-card h3 {
            margin: 10px 0;
            font-size: 18px;
        }
        .product-card p {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>TOKO ELEKTRONIK</h1>
        <div class="nav">
            <a href="<?php echo e(url('/')); ?>">Home</a>
            <a href="<?php echo e(url('/')); ?>">Produk</a>
            <a href="<?php echo e(url('/tentang')); ?>">Tentang</a>
            <a href="<?php echo e(route('login')); ?>">Login</a>
        </div>
    </div>

    <div class="catalog">
        <?php if($produks->isEmpty()): ?>
            <p style="text-align: center; width: 100%;">Tidak ada produk yang tersedia.</p>
        <?php else: ?>
            <?php $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product-card">
                    <?php if($produk->gambar): ?>
                        <img src="<?php echo e(asset('storage/' . $produk->gambar)); ?>" alt="<?php echo e($produk->nama_produk); ?>">
                    <?php endif; ?>
                    <h3><?php echo e($produk->nama_produk); ?></h3>
                    <p>Kode: <?php echo e($produk->kode_produk); ?></p>
                    <p>Kategori: <?php echo e($produk->kategori->nama_kategori); ?></p>
                    <p><?php echo e($produk->deskripsi); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\toko\resources\views/home.blade.php ENDPATH**/ ?>