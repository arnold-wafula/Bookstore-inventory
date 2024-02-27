<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\CustomerController;

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;

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
    return view(Auth::check() ? 'home' : 'auth.login');
});

Auth::routes();

Route::middleware(['admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::post('/admin', [AdminController::class, 'store']);
    
    Route::get('/book', [BookController::class, 'index'])->name('book');
    Route::post('/book', [BookController::class,'store']);
    Route::get('/display', [BookController::class, 'display'])->name('display');
});

Route::middleware(['customer'])->group(function() {
    Route::get('/customer', [CustomerController::class, 'index']);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');