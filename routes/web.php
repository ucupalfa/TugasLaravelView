<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\phpControllerBiasa;

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
// Route::get('/', [MahasiswaController::class, 'index']);

// Route::get('/', [inicontroller::class, 'home']);
// Route::get('/about', [inicontroller::class, 'about']);
// Route::get('/contact', [inicontroller::class, 'contact']);

Route::get('/student', [StudentsController::class, 'index']);
Route::get('/', [phpControllerBiasa::class, 'home']);
Route::get('/about', [phpControllerBiasa::class, 'about']);
