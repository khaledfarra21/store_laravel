<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

//! ---------- Dashboard Routes ---------- !//
Route::middleware('auth')->group(function () {
    //* ---------- Routes of Products ---------- *//
    Route::get('admin',  [ProductController::class, 'index']); //TODO: create dashboard page (احصائيات وهيك)
    Route::get('admin/products',  [ProductController::class, 'index']);
    Route::get('admin/products/create',  [ProductController::class, 'create']);
    Route::post('admin/products/store',  [ProductController::class, 'store']);
    Route::get('admin/products/edit/{id}',  [ProductController::class, 'edit']);
    Route::get('admin/products/delete/{id}',  [ProductController::class, 'destroy']);
    Route::patch('admin/products/update/{id}',  [ProductController::class, 'update']);

    //* ---------- Routes of Categories ---------- *//
    Route::get('admin/categories',  [CategoryController::class, 'index']);
    Route::get('admin/categories/create',  [CategoryController::class, 'create']);
    Route::post('admin/categories/store',  [CategoryController::class, 'store']);
    Route::get('admin/categories/edit/{id}',  [CategoryController::class, 'edit']);
    Route::get('admin/categories/delete/{id}',  [CategoryController::class, 'destroy']);
    Route::patch('admin/categories/update/{id}',  [CategoryController::class, 'update']);

    //* ---------- Routes of Orders ---------- *//
    Route::get('admin/orders/index', function () {
        return view('admin.orders.index');
    });

    //! ---------- Front Page Routes ---------- !//
    //* You can use this function withoutMiddleware() or move the route outside the group
    // Route::get('/',  [ProductController::class, 'indexHomePage'])->withoutMiddleware('auth');

});

// Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//! ---------- Front Page Routes ---------- !//
Route::get('/',  [ProductController::class, 'indexHomePage']);
