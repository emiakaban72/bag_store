<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagController;

Route::get('/', [BagController::class, 'index'])->name('index');
Route::post('/tambah', [BagController::class, 'store'])->name('store');
Route::get('/hapus/{id}', [BagController::class, 'destroy'])->name('destroy');