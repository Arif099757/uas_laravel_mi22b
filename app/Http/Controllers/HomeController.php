<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $produks = Produk::with('kategori')->get(); // Mengambil semua produk beserta kategorinya
        return view('home', compact('produks')); // Mengirim data produk ke view
    }
}