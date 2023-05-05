<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\FaqController;




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

Route::get('faq', function () {
    return view('layouts.faq');
})->name('faq');

Route::get('faqs', function () {
    return view('layouts.faqs-list');
})->name('faqs');



Route::get('drivers', [DriverController::class, 'index'])->name('drivers-list');
Route::get('news-letters', [NewsLetterController::class, 'index'])->name('news-letters');

Route::post('vehicle-store', [VehicleController::class, 'store'])->name('vehicle-store');
Route::post('owner-store', [OwnerController::class, 'store'])->name('owner-store');
Route::post('driver-store', [DriverController::class, 'store'])->name('driver-store');
Route::post('news-letter-store', [NewsLetterController::class, 'store'])->name('news-letter-store');
Route::post('faq-store', [FaqController::class, 'store'])->name('faq-store');
