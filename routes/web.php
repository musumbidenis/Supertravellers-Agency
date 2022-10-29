<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\ClientController;

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

/**Client Section Routes */
Route::get('/', [ClientController::class,'index']);

Route::get('/about', function () {
    return view('client.about');
});

Route::get('/contact', function () {
    return view('client.contact');
});

Route::resource('users', UsersController::class);
Route::resource('packages', PackagesController::class);
Route::resource('destinations', DestinationsController::class);