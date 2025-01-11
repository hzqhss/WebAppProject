<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
