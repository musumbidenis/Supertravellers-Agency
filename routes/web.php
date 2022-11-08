<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationsController;


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

/** Client Section Routes */
Route::get('/', [ClientController::class,'index']);
Route::get('/getPackage/{id}', [ClientController::class,'getPackage']);
Route::get('/getPackageType/{type}', [ClientController::class,'getPackageType']);
Route::post('/getDestination', [ClientController::class,'getDestination']);
Route::post('/booking/{id}', [ClientController::class,'book']);
Route::post('/booking/update/{id}', [ClientController::class,'bookingUpdate']);
Route::get('/myBookings', [ClientController::class,'myBookings']);

Route::get('/about', function () {
    return view('client.about');
});

Route::get('/contact', function () {
    return view('client.contact');
});



/** Authentication Routes */
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class,'logout']);

Route::get('/dashboard', [DashboardController::class,'index']);


/** Admin Section Routes */
Route::resource('users', UsersController::class);
Route::resource('packages', PackagesController::class);
Route::resource('destinations', DestinationsController::class);
Route::resource('bookings', BookingsController::class);