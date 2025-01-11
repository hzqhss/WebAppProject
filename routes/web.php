<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\OrderingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
=======
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

    Route::get('/order-history', [OrderHistoryController::class, 'index'])->name('order.history');

    Route::get('/ordering', [OrderingController::class, 'index'])->name('ordering');
    Route::post('/ordering', [OrderingController::class, 'store'])->name('ordering.store');
});

Route::get('/contact', [UserController::class, 'index'])->name('contact');
Route::get('/feedback', [UserController::class, 'user'])->name('feedback');
Route::post('/feedback', [UserController::class, 'store'])->name('feedback.store');
>>>>>>> 8ebb29f69235b4db8d6647b75666037f55e5c2e6
