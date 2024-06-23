<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TKController;
use App\Http\Controllers\SPController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/san-pham', [ProductController::class, 'spbanchay'])->name('spbanchay');
Route::get('/Đồ-cho-chó', [ProductController::class, 'spdog'])->name('Đồchochó');
Route::get('/Đồ-cho-mèo', [ProductController::class, 'spmeo'])->name('Đồchomèo');
Route::get('/sanphamchitiet/{product_id}', [ProductController::class, 'detail'])->name('sanphamchitiet');
Route::get('/categories/{category_id}', [ProductController::class, 'getproductByCategories'])->name('categories');
Route::get('/categories2/{category_id}', [ProductController::class, 'getproductByCategories2'])->name('categories2');
Route::get('/search', [ProductController::class, 'search'])->name('search');

Route::get('/user', [UserController::class, 'user'])->name('user');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/capnhat', [UserController::class, 'capnhat'])->name('capnhat')->middleware('auth');
Route::get('/lichsudonhang', [CartController::class, 'lichsudonhang'])->name('lichsudonhang')->middleware('auth');
Route::get('/lichsudonhang/{id}', [CartController::class, 'show'])->name('show')->middleware('auth');
Route::post('/capnhatform', [UserController::class, 'capnhatform'])->name('capnhatform')->middleware('auth');

Route::get('/tintuc', [BlogController::class, 'blog'])->name('tintuc');
Route::get('/lienhe', [ContactController::class, 'contact'])->name('lienhe');
Route::get('/giohangadd/{id}', [CartController::class, 'themgiohang'])->name('themgiohang');
Route::get('/giohangdelete/{id}', [CartController::class, 'xoagiohang'])->name('xoagiohang');
Route::get('/giohang', [CartController::class, 'cart'])->name('giohang');
Route::get('/thanhtoan', [CartController::class, 'thanhtoan'])->name('thanhtoan');
Route::post('/shopping', [CartController::class, 'shopping'])->name('shopping');
Route::get('/bill', [CartController::class, 'bill'])->name('bill');

//admin
Route::get('/admin', [TKController::class, 'tk'])->name('admin');
Route::get('/spadmin', [SPController::class, 'sp'])->name('spadmin');
Route::post('/spadminadd', [SPController::class, 'spadminadd'])->name('spadminadd');
Route::get('/spdelete/{id}', [SPController::class, 'spdelete'])->name('spdelete');
Route::put('/spupdate/{id}', [SPController::class, 'spupdate'])->name('spupdate');
Route::get('/dmadmin', [TKController::class, 'dm'])->name('dmadmin');
Route::post('/dmadminadd', [TKController::class, 'dmadminadd'])->name('dmadminadd');
Route::get('/dmdelete/{id}', [TKController::class, 'dmdelete'])->name('dmdelete');
Route::put('/dmupdate/{id}', [TKController::class, 'dmupdate'])->name('dmupdate');
Route::get('/tkadmin', [TKController::class, 'user'])->name('tkadmin');
Route::get('tkdelete/{id}',[TKController::class,'tkdelete'])->name('tkdelete');
Route::get('/dhadmin', [TKController::class, 'dh'])->name('dhadmin');
Route::post('/dhupdate/{id}', [TKController::class, 'dhupdate'])->name('dhupdate');
Route::get('/dhadmin/{id}', [TKController::class, 'detaildh'])->name('detaildh');


