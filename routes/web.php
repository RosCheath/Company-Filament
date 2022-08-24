<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('about/us', [\App\Http\Controllers\AboutUsController::class, 'index']);
Route::get('our/services', [\App\Http\Controllers\OurServiceController::class, 'index']);
Route::get('new/feed', [\App\Http\Controllers\NewFeedController::class, 'index']);
Route::get('contact/us', [\App\Http\Controllers\ContactUsController::class, 'index']);

Route::post('contact/form', [\App\Http\Controllers\ContactUsController::class, 'contact'])->name('contact.store');
Route::post('appointment/form', [\App\Http\Controllers\HomeController::class, 'appointment'])->name('appointment.store');
