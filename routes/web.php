<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [EventController::class,'Event']) -> name('Event');

Route::get('/checkout/{id}', [EventController::class,'checkout']) -> name('checkout');

Route::get('/invoice', [EventController::class,'invoice']) -> name('invoice');

Route::get('/bill', function () {
    return view('invoice');
});