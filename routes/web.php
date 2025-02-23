<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/produk', [ProductController::class, '/index']);

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth'); // Pastikan hanya pengguna yang terautentikasi yang bisa mengakses

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin');

Route::resource('kategori', KategoriController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('produk', ProdukController::class);

Route::get('/', [HomeController::class, 'index'])->name('home');
});