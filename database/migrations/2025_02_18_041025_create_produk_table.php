<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('kode_produk', 10)->nullable(); // Kode produk
            $table->string('nama_produk', 50); // Nama produk
            $table->unsignedBigInteger('kategori_id'); // Foreign key
            $table->string('deskripsi', 150)->nullable(); // Deskripsi produk
            $table->string('gambar', 150)->nullable(); // Gambar produk
            $table->timestamps(); // created_at dan updated_at
            $table->softDeletes(); // deleted_at untuk soft delete

            // Menambahkan foreign key
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
};
