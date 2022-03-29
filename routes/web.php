<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RideController;

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

Route::get('/', [AuthController::class,'showLoginForm']);
Route::resource('rides', RideController::class);
Route::get('/user', function () {
    return view('user');
});
Route::get('/driver', function () {
    return view('driver');
});
Route::get('/cars', function () {
    return view('cars');
});



