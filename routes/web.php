<?php
use Illuminate\Support\Facades\Route;


Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    // Contoh validasi sederhana
    if ($username === 'admin' && $password === 'admin123') {
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('landing')->with('error', 'Username atau password salah');
    }


})->name('login');
// Halaman Landing Page
Route::get('/', function () {
    return view('landing');
})->name('landing');

// Proses Login
Route::post('/login', function () {
    // Proses validasi login (bisa disesuaikan dengan kebutuhan)
    return redirect()->route('dashboard');
})->name('login');

// Halaman Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// Halaman Barang, Pesanan, Transaksi (sesuai project sebelumnya)
Route::get('/barang', function () {
    return view('admin.barang');
})->name('barang');

Route::get('/pesanan', function () {
    return view('admin.pesanan');
})->name('pesanan');

Route::get('/transaksi', function () {
    return view('admin.transaksi');
})->name('transaksi');
