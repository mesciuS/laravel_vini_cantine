<?php

use App\Http\Controllers\Guest\CanteenController;
use App\Http\Controllers\Guest\WineController;
use App\Http\Controllers\Guest\WineyardController;
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
Route::get('/', function() {
    return view('home');
});

Route::get('/wine', [WineController::class, 'index'])->name('wine');
Route::get('/canteen', [CanteenController::class, 'index'])->name('canteen');
Route::get('/wineyard', [WineyardController::class, 'index'])->name('wineyard');

