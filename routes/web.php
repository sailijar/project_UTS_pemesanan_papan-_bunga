<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('admin/barang', function () {
    return view('admin.barang');
})->name('barang');

Route::get('admin/pesanan', function () {
    return view('admin.pesanan');
})->name('pesanan');

Route::get('admin/transaksi', function () {
    return view('admin.transaksi');
})->name('transaksi');
