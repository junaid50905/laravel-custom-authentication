<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [UserController::class, 'create'])->middleware('alreadyloggedin');
Route::post('/register/store', [UserController::class, 'registerStore'])->name('register.store');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('alreadyloggedin');
Route::post('/login/store', [UserController::class, 'loginStore'])->name('login.store');


Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('authcheck');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
