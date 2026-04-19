<?php // <--- WAJIB ADA BARIS INI DI PALING ATAS

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagController;

Route::get('/', [BagController::class, 'index'])->name('produk.index');
Route::post('/produk/store', [BagController::class, 'store'])->name('produk.store');
Route::get('/produk/edit/{id}', [BagController::class, 'edit'])->name('produk.edit');
Route::put('/produk/update/{id}', [BagController::class, 'update'])->name('produk.update');
Route::delete('/produk/delete/{id}', [BagController::class, 'destroy'])->name('produk.destroy');