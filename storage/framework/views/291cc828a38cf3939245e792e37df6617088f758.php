

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="<?php echo e(route('produk.create')); ?>" class="btn btn-primary">Tambah Produk</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($produk->id); ?></td>
                <td><?php echo e($produk->kode_produk); ?></td>
                <td><?php echo e($produk->nama_produk); ?></td>
                <td><?php echo e($produk->kategori->nama_kategori); ?></td>
                <td><?php echo e($produk->deskripsi); ?></td>
                <td>
                    <?php if($produk->gambar): ?>
                        <img src="<?php echo e(asset('storage/' . $produk->gambar)); ?>" width="100">
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('produk.edit', $produk->id)); ?>" class="btn btn-warning">Edit</a>
                    <form action="<?php echo e(route('produk.destroy', $produk->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\katalog-toko\resources\views/produk/index.blade.php ENDPATH**/ ?>