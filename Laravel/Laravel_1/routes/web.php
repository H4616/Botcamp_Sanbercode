<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Laravel_1\AuthController;
use App\Http\Controllers\Laravel_1\HomeController;
use App\Http\Controllers\Laravel_2\IndexController;
use App\Http\Controllers\Laravel_2\TableController;

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

//Tugas 12 Laravel
Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [AuthController::class,'daftar']);
Route::post('/wellcome', [AuthController::class,'wellcome']);

//Tugas 13 Laravel
Route::get('/masterLayout', [IndexController::class,'masterLayout']);
Route::get('/table', [TableController::class,'tabel']);
Route::get('/dataTable',[TableController::class,'dataTabel']);