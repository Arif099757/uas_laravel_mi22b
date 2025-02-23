<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KEDAI FOOD & DRINKS</title>

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
        .products {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .product {
            border-bottom: 1px solid #e5e7eb;
            padding: 10px 0;
        }
        .product:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>KEDAI FOOD & DRINKS</h1>
        <div class="nav">
            <a href="<?php echo e(url('/')); ?>">Home</a>
            <a href="<?php echo e(url('/')); ?>">Produk</a>
            <a href="<?php echo e(url('/tentang')); ?>">Tentang</a>
            <a href="<?php echo e(route('login')); ?>">Login</a>
        </div>
    </div>

    <div class="products">
        <h2>Daftar Produk</h2>
        <?php if($produks->isEmpty()): ?>
            <p>Tidak ada produk yang tersedia.</p>
        <?php else: ?>
            <?php $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="product">
                    <h3><?php echo e($produk->nama_produk); ?></h3>
                    <p>Kode Produk: <?php echo e($produk->kode_produk); ?></p>
                    <p>Kategori: <?php echo e($produk->kategori->nama_kategori); ?></p>
                    <p>Deskripsi: <?php echo e($produk->deskripsi); ?></p>
                    <?php if($produk->gambar): ?>
                        <img src="<?php echo e(asset('storage/' . $produk->gambar)); ?>" alt="<?php echo e($produk->nama_produk); ?>" width="100">
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</body>
</html><?php /**PATH C:\Users\user\katalog-toko\resources\views/home.blade.php ENDPATH**/ ?>