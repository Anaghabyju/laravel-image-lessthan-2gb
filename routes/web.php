<?php

use App\Http\Controllers\HomeController;
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

Route::get('/register',[HomeController::class,'register'])->name('register');
Route::post('/create',[HomeController::class,'create'])->name('create');
Route::get('/showlogin',[HomeController::class,'showlogin'])->name('showlogin');
Route::post('/login',[HomeController::class,'login'])->name('login');
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
