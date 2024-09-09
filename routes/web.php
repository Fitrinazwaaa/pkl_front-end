<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('navigasi');
});


Route::get('/data-siswa', function () {
    return view('data-siswa');
})->name('data-siswa');

Route::get('/poin-siswa', function () {
    return view('tbl-poin');
})->name('poin-siswa');

Route::get('/keterangan-poin', function () {
    return view('data-aturan');
})->name('keterangan-poin');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/pengaturan-akun', function () {
    return view('pengaturan');
})->name('pengaturan-akun');

Route::get('/search', function (Request $request) {
    $query = $request->input('search');
    // Logika pencarian atau pengembalian view dengan hasil pencarian
    return view('search-results', ['query' => $query]);
})->name('search');