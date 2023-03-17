<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\SessionController;

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

    Route::view("/", 'pages.home')->name('home');
    Route::post('/destroy', [SessionController::class, "destroy"]);


    Route::get("/clients", [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');

    Route::get("clients/{client}", [ClientController::class, 'show'])->name('clients.show');

    Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
    Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');

    Route::view('/compte/supprimer', 'pages.supprimer')->name('comptes.supprimer');
    Route::view('/compte/depot', 'pages.depot')->name('comptes.depot');
    Route::view('/compte/retrait', 'pages.retrait')->name('comptes.retrait');

    Route::delete('/comptes', [CompteController::class, 'destroy'])->name('comptes.destroy');
    Route::post('/compte/depot', [CompteController::class, 'effectuer_depot'])->name('effectuer.depot');
    Route::post('/compte/retrait', [CompteController::class, 'effectuer_retrait'])->name('effectuer.retrait');
});


Route::middleware(['guest'])->group(function () {

    Route::view('/register', 'register');

    Route::view('/login', 'login')->name('login');

    Route::post('/login', [SessionController::class, "create"]);
    
    Route::post('/register', [SessionController::class, "register"]);
    
    
});


