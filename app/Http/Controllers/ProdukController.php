<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::with('kategori')->get();
        return view('produk.index', compact('produks'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('produk.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_produk' => 'nullable|string|max:10',
            'nama_produk' => 'required|string|max:50',
            'kategori_id' => 'required|exists:kategori,id',
            'deskripsi' => 'nullable|string|max:150',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $produk = new Produk($request->all());

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images', 'public');
            $produk->gambar = $path;
        }

        $produk->save();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategoris = Kategori::all();
        return view('produk.edit', compact ('produk', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_produk' => 'nullable|string|max:10',
            'nama_produk' => 'required|string|max:50',
            'kategori_id' => 'required|exists:kategori,id',
            'deskripsi' => 'nullable|string|max:150',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->fill($request->all());

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($produk->gambar) {
                Storage::disk('public')->delete($produk->gambar);
            }
            $path = $request->file('gambar')->store('images', 'public');
            $produk->gambar = $path;
        }

        $produk->save();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}