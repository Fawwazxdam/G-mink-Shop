<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('dashboard');
});
Route::get('payment', function () {
    return view('payment');
});

// Route::get('dashboard', function () {
//     return view('dashboard');
// });
Route::resource('/dashboard', DashboardController::class);
Route::resource('/kategori', KategoriController::class);
Route::get('delkat/{kategori}', [App\Http\Controllers\KategoriController::class, 'destroy']);
Route::resource('/produk', ProdukController::class);
Route::get('delpro/{produk}', [App\Http\Controllers\ProdukController::class, 'destroy']);

Route::resource('/transaksi', TransaksiController::class);
Route::resource('/topup', TopupController::class);

Route::get('midtrans/{transaksi}', [App\Http\Controllers\TopupController::class, 'midtrans']);


