<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('frontend.pages.home.home');
});

Route::get('/register',[UserController::class,'loadRegister'])->name('register');
Route::post('/register',[UserController::class,'register'])->name('register.store');



Route::get('/login',[UserController::class,'loadLogin'])->name('login');