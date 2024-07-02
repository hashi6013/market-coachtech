<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\AddressEditController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteController;

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

Route::get('/', [ItemController::class, 'index']);
Route::get('/search', [ItemController::class, 'search']);
Route::get('/item/favorite/{id}', [FavoriteController::class, 'favorite'])->name('item.favorite');
Route::get('/item/unlike/{id}', [FavoriteController::class, 'unlike'])->name('item.unlike');
Route::get('/item/{item_id}', [ItemController::class, 'itemDetail']);
Route::get('/purchase/{item_id}', [PurchaseController::class, 'purchase']);
Route::get('/sell', [ItemController::class, 'sell']);
Route::get('/comment', [CommentController::class, 'comment']);

// 仮
Route::get('/purchase/address/{item_id}', [AddressEditController::class, 'addressEdit']);
Route::get('/mypage', [MypageController::class, 'mypageIndex']);
Route::get('/mypage/profile', [MypageController::class, 'update']);

