<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
</head>
<body>
    <h1>Edit Kategori</h1>
    <form action="<?php echo e(route('kategori.update', $kategori->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" name="nama_kategori" id="nama_kategori" value="<?php echo e($kategori->nama_kategori); ?>" required>
        <button type="submit">Perbarui</button>
    </form>
    <a href="<?php echo e(route('kategori.index')); ?>">Kembali</a>
</body>
</html><?php /**PATH C:\Users\user\katalog-toko\resources\views/kategori/edit.blade.php ENDPATH**/ ?>