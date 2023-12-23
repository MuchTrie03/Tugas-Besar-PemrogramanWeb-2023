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

Route::get('/register',[AuthController::class,'register']);
Route::get('/login',[AuthController::class,'login']);
Route::get('/user',[UserController::class,'halaman_user'])->name('home_user');
Route::get('/chekout',[UserController::class,'halaman_chekout']);
Route::get('/admin',[AdminController::class,'halaman_admin']);
Route::get('/adlog',[AdminController::class,'index']);

route::post('/register',[AuthController::class,'regis_post'])->name('registerpost');
route::post('/login',[AuthController::class,'login_post'])->name('loginpost');