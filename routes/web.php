<?php

use App\Http\Controllers\DropshipperController;
use App\Http\Controllers\ProductController;
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

Route::get('/dropshipper/', [DropshipperController::class, 'showIndex'])->name('dropshipperShowIndex');
Route::get('/dropshipper/login', [DropshipperController::class, 'showLogin'])->name('dropshipperShowLogin');
Route::get('/dropshipper/login', [DropshipperController::class, 'showRegister'])->name('dropshipperShowRegister');
Route::get('/dropshipper/profile', [DropshipperController::class, 'showProfile'])->name('dropshipperShowProfile');
Route::get('/dropshipper/edit-profile', [DropshipperController::class, 'showEditProfile'])->name('dropshipperShowEditProfile');
Route::get('/dropshipper/products', [ProductController::class, 'showProducts'])->name('dropshipperShowProducts');