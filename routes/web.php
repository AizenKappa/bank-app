<?php

use App\Http\Controllers\SessionController;
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

Route::middleware(['auth'])->group(function () {

    Route::view("/", 'home');
    Route::view("/home", 'home');
    Route::post('/destroy', [SessionController::class, "destroy"]);
});


Route::middleware(['guest'])->group(function () {

    Route::view('/register', 'register');

    Route::view('/login', 'login')->name('login');

    Route::post('/login', [SessionController::class, "create"]);
    
    Route::post('/register', [SessionController::class, "register"]);
    
    
});


