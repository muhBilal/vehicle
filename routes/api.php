<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;

Route::namespace('Auth')->group(function(){
    Route::post('register', [UserController::class, 'register']);
    Route::post('login', [UserController::class, 'login']);
});

Route::middleware('jwt.verify')->group(function () {
    Route::get('stock', [VehicleController::class, 'stock'])->name('stok');
    Route::post('sell', [VehicleController::class, 'sell'])->name('sell');
    Route::get('sellReport', [VehicleController::class, 'sellReport'])->name('report');
});
