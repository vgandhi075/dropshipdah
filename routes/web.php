<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DropshipperController;
use App\Http\Controllers\ProductController;
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

// Dropshipper
Route::get('/dropshipper/', [DropshipperController::class, 'showIndex'])->name('dropshipperShowIndex');
Route::get('/dropshipper/login', [DropshipperController::class, 'showLogin'])->name('dropshipperShowLogin');
Route::get('/dropshipper/login', [DropshipperController::class, 'showRegister'])->name('dropshipperShowRegister');
Route::get('/dropshipper/profile', [DropshipperController::class, 'showProfile'])->name('dropshipperShowProfile');
Route::get('/dropshipper/edit-profile', [DropshipperController::class, 'showEditProfile'])->name('dropshipperShowEditProfile');
Route::get('/dropshipper/products', [ProductController::class, 'showProducts'])->name('dropshipperShowProducts');

// Supplier
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplierIndex');
Route::get('/supplier/profile', [SupplierController::class, 'showProfile'])->name('supplierShowProfile');
Route::get('/supplier/edit_profile', [SupplierController::class, 'showEditProfile'])->name('supplierShowEditProfile');
Route::get('/supplier/login', [SupplierController::class, 'showLogin'])->name('supplierShowLogin');
Route::get('/supplier/new_order', [SupplierController::class, 'showNewOrders'])->name('supplierNewOrders');
Route::get('/supplier/ongoing_order', [SupplierController::class, 'showOngoingOrders'])->name('supplierOngoingOrders');
Route::get('/supplier/finished_order', [SupplierController::class, 'showFinishedOrders'])->name('supplierFinishedOrders');
Route::get('/supplier/return_requests', [SupplierController::class, 'showReturnRequests'])->name('supplierReturnRequests');
Route::get('/supplier/cancellation_requests', [SupplierController::class, 'showCancellationRequests'])->name('supplierCancellationRequests');
Route::get('/supplier/products', [SupplierController::class, 'showProducts'])->name('supplierShowProducts');

// Admin
Route::get('/admin/', [AdminController::class, 'showIndex'])->name('adminShowIndex');
Route::get('/admin/new_order', [AdminController::class, 'showNewOrders'])->name('adminNewOrders');
Route::get('/admin/ongoing_order', [AdminController::class, 'showOngoingOrders'])->name('adminOngoingOrders');
Route::get('/admin/finished_order', [AdminController::class, 'showFinishedOrders'])->name('adminFinishedOrders');
Route::get('/admin/return_requests', [AdminController::class, 'showReturnRequests'])->name('adminReturnRequests');
Route::get('/admin/cancellation_requests', [AdminController::class, 'showCancellationRequests'])->name('adminCancellationRequests');
Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('adminShowUsers');
