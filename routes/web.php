<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TiketController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/notif', function () {
    return view('notif');
});
Route::get('/riwayat', function () {
    return view('riwayat');
});
Route::get('/mencari_tiket', function () {
    return view('mencari_tiket');
});
Route::get('/informasi_pesanan', function () {
    return view('informasi_pesanan');
});
Route::get('/pembayaran', function () {
    return view('pembayaran');
});



Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/add', [BlogController::class, 'add']);
Route::post('/blog/create', [BlogController::class, 'create']);

Route::get('/mencari_tiket', [TiketController::class, 'index']);