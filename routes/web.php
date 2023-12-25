<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function ()
{
    return view('index');
});

//route admin view (sementara)
Route::get('/admin/members', function ()
{
    return view('admin.members');
});

Route::get('/admin/riwayat', function ()
{
    return view('admin.riwayat_transaksi');
});

Route::get('/admin/harga', function ()
{
    return view('admin.daftar_harga');
});

Route::get('/admin/input', function ()
{
    return view('admin.input_transaksi');
});
//===========================================================





// Auth Routes
Route::get('/register',[AuthController::class,'register']);
Route::get('/login',[AuthController::class,'login']);
Route::get('/user',[UserController::class,'halaman_user'])->name('home_user');
Route::get('/chekout',[UserController::class,'halaman_chekout']);
Route::get('/admin',[AdminController::class,'halaman_admin']);
Route::get('/adlog',[AdminController::class,'index']);

route::post('/register',[AuthController::class,'regis_post'])->name('registerpost');
route::post('/login',[AuthController::class,'login_post'])->name('loginpost');