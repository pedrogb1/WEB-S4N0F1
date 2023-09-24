<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RemediesController;
use App\Http\Controllers\VersionsController;

use Illuminate\Support\Facades\Route;


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

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/', function () {
    return redirect('active-ingredients');
});

Route::get('/active-ingredients', [HomeController::class, 'index']);

Route::get('/active-ingredients', [RemediesController::class, 'index']);

Route::get('/active-ingredient/{active_ingredient}', [VersionsController::class, 'index']);