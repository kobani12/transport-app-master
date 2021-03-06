<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RideController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;

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
Route::get('/user', function () {
    return view('user');
});


Route::get('/', [AuthController::class,'showLoginForm']);

Route::resource('rides', RideController::class);

Route::resource('cars', CarController::class);

Route::resource('driver', DriverController::class);

Route::resource('booking', BookingController::class);

Route::resource('users', UserController::class);

