<?php

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
    return view('layouts.beranda');
});

Route::view('databuku', 'data.databuku');
Route::view('datapetugas', 'data.datapetugas');
Route::view('datasiswa', 'data.datasiswa');
Route::view('peminjaman', 'transaksi.peminjaman');
Route::view('pengembalian', 'transaksi.pengembalian');
