<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Routes pour l'authentification
Route::get('/inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [AuthController::class, 'inscriptionPost'])->name('inscription');

Route::get('/connexion', [AuthController::class, 'connexion'])->name('connexion');
Route::post('/connexion', [AuthController::class, 'connexionPost'])->name('connexion');
use App\Http\Controllers\CandidatureController;

Route::get('/postuler', [CandidatureController::class, 'creer'])->name('candidatures.creer');
Route::post('/postuler', [CandidatureController::class, 'store'])->name('candidatures.store');
