<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;

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

Route::get('/home', [HomeController::class, "index"])->name('home.index');

Route::get('/about', [AboutController::class, "index"])->name('about.index');

Route::get('/menu', [MenuController::class, "index"])->name('menu.index');

Route::get('/order', [OrderController::class, "index"])->name('order.index');

Route::get('/login', [LoginController::class, "index"])->name('login.index');
