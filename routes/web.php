<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'welcome']);
    Route::get('/register', [AuthController::class, 'register_view'])->name('register_view');
    Route::post('/register/store', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'login_view'])->name('login_view');
    Route::post('/login/store', [AuthController::class, 'login'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [AuthController::class, 'home'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('products', ProductController::class);
});
