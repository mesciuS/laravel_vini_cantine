<?php

use App\Http\Controllers\Admin\CanteenControlController;
use App\Http\Controllers\Admin\ControlController;
use App\Http\Controllers\Admin\WineControlController;
use App\Http\Controllers\Admin\WineyardControlController;
use App\Http\Controllers\Guest\CanteenController;
use App\Http\Controllers\Guest\WineController;
use App\Http\Controllers\Guest\WineyardController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/admin-wine', [WineControlController::class, 'home'])->middleware(['auth', 'verified']);
Route::get('/admin-wineyard', [WineyardControlController::class, 'home'])->middleware(['auth', 'verified']);
Route::get('/admin-canteen', [CanteenControlController::class, 'home'])->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/wine', [WineController::class, 'index'])->name('wine');
Route::get('/canteen', [CanteenController::class, 'index'])->name('canteen');
Route::get('/wineyard', [WineyardController::class, 'index'])->name('wineyard');

require __DIR__.'/auth.php';
