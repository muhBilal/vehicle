<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::namespace('Auth')->group(function(){
    Route::post('register', [RegisterController::class, 'index']);
    Route::post('login', [LoginController::class, 'login']);
});

Route::get('user', [UserController::class, 'index']);
Route::get('stok', [VehicleController::class, 'show']);
Route::post('sell', [VehicleController::class, 'sell']);
Route::post('sellReport', [VehicleController::class, 'sellReport']);

