<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\EnsureOrderExistMiddleware;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');

    Route::middleware(EnsureOrderExistMiddleware::class)
    ->group(function () {
        Route::get('/orders/create/detail/{product}', [OrderController::class, 'createDetail'])->name('orders.create.detail');
        Route::post('/orders/create/detail/{product}', [OrderController::class, 'storeDetail'])->name('orders.store.detail');

        Route::post('/orders/checkout', [OrderController::class,'checkout'])->name('orders.checkout');
    });

    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');

    Route::resource('categories', CategoryController::class);
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    Route::resource('products', ProductController::class);
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');;


    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});
