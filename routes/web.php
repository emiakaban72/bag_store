<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagController;

Route::get('/', [BagController::class, 'index'])->name('produk.index');

Route::post('/store', [BagController::class, 'store'])->name('produk.store');

Route::get('/edit/{id}', [BagController::class, 'edit'])->name('produk.edit');

Route::put('/update/{id}', [BagController::class, 'update'])->name('produk.update');

Route::delete('/delete/{id}', [BagController::class, 'destroy'])->name('produk.delete');