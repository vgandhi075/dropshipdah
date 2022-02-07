<?php

use App\Http\Controllers\DropshipperController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SupplierController;
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
    return view('dropshipperIndex');
});
Route::get('/dropshipper/login', [DropshipperController::class, 'showLogin'])->name('dropshipperShowLogin');
Route::get('/dropshipper/login', [DropshipperController::class, 'showRegister'])->name('dropshipperShowRegister');
Route::get('/dropshipper/profile', [DropshipperController::class, 'showProfile'])->name('dropshipperShowProfile');
Route::get('/dropshipper/edit-profile', [DropshipperController::class, 'showEditProfile'])->name('dropshipperShowEditProfile');
Route::get('/products', [ProductController::class, 'showProducts'])->name('showProducts');

// Supplier Info
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplierIndex');
Route::get('/supplier/profile', [SupplierController::class, 'showProfile'])->name('supplierShowProfile');
Route::get('/supplier/edit_profile', [SupplierController::class, 'showEditProfile'])->name('supplierShowEditProfile');
Route::get('/supplier/login', [SupplierController::class, 'showLogin'])->name('supplierShowLogin');

// Supplier Order
Route::get('/supplier/new_order', [OrderController::class, 'supplierNewOrders'])->name('supplierNewOrders');
Route::get('/supplier/ongoing_order', [OrderController::class, 'supplierOngoingOrders'])->name('supplierOngoingOrders');
Route::get('/supplier/finished_order', [OrderController::class, 'supplierFinishedOrders'])->name('supplierFinishedOrders');
Route::get('/supplier/return_requests', [OrderController::class, 'supplierReturnRequests'])->name('supplierReturnRequests');
Route::get('/supplier/cancellation_requests', [OrderController::class, 'supplierCancellationRequests'])->name('supplierCancellationRequests');
Route::get('/supplier/new_order/new_order_details', [OrderController::class, 'supplierShowProducts'])->name('supplierShowProducts');

// Supplier Product
Route::get('/supplier/products', [ProductController::class, 'supplierShowProducts'])->name('supplierShowProducts');
