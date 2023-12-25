<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

// Route View Admin Sementara (belum ditambah backend)
Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/daftar_member', function () {
    return view('admin.members');
});

Route::get('/riwayat_transaksi', function () {
    return view('admin.riwayat_transaksi');
});


// Route User sementara (belum ditambah backend)
Route::get('/user', function () {
    return view('user.user');
});
