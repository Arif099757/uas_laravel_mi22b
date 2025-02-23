<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['name' => 'Produk 1', 'description' => 'Deskripsi Produk 1']);
    Product::create(['name' => 'Produk 2', 'description' => 'Deskripsi Produk 2']);
    // Tambahkan produk lainnya sesuai kebutuhan
    }
}
