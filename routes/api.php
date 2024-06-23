<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiProductsController as ProductController;
use App\Http\Controllers\apiCategoriesController as CategoriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/san-pham', [ProductController::class, 'spbanchay'])->name('spbanchay');
Route::get('/Đồ-cho-chó', [ProductController::class, 'spdog'])->name('Đồchochó');
Route::get('/Đồ-cho-mèo', [ProductController::class, 'spmeo'])->name('Đồchomèo');

Route::resource('/Products', ProductController::class);
Route::resource('/Categories', CategoriesController::class);

