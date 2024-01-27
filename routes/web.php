<?php

use App\Http\Controllers\halamanController;

// login
Route::get('/login', [halamanController::class, 'login'])->name('login');
Route::post('/login', [halamanController::class, 'doLogin']);
Route::get('/logout', [halamanController::class, 'logout']);
Route::get('/create-sample', [halamanController::class, 'createSample']);

// administrator
Route::get('/dashboard', [halamanController::class, 'dashboard'])->name('dashboard');

// kasir
Route::get('/pesanan1', [halamanController::class, 'pesanan1'])->name('pesanan_kasir');
Route::get('/laporan', [halamanController::class, 'laporan'])->name('laporan');
 
// waiter
Route::get('/pesanan2', [halamanController::class, 'pesanan2'])->name('pesanan_waiter');

// pelanggan
Route::get('/pelanggan', [halamanController::class, 'pelanggan'])->name('pelanggan');

Route::get('/struk', [halamanController::class, 'struk'])->name('struk_belanja');

