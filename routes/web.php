<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\OwnerController;




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

Route::get('/', function () {
    return view('layouts.index');
})->name('home');

Route::get('register', function () {
    return view('layouts.register');
})->name('register');

Route::get('owner', function () {
    return view('layouts.owner');
})->name('owner');

Route::get('driver', function () {
    return view('layouts.driver');
})->name('driver');

Route::get('drivers', function () {
    return view('layouts.drivers-list');
})->name('drivers');

Route::post('vehicle-store', [VehicleController::class, 'store'])->name('vehicle-store');
Route::post('owner-store', [OwnerController::class, 'store'])->name('owner-store');
Route::post('driver-store', [DriverController::class, 'store'])->name('driver-store');
