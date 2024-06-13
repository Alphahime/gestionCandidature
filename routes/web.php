<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\CandidatureController;


// route vers le formulaire pour soumettre sa candidature
Route::get('/postuler', [CandidatureController::class, 'creer'])->name('candidatures.creer');
Route::post('/postuler', [CandidatureController::class, 'store'])->name('candidatures.store');

//vers la page d'acceuil

Route::get('/acceuil', [LandingController::class, 'landing'])->name('landing');
Route::get('/candidatures', [CandidatureController::class, 'index'])->name('candidatures.index');
Route::post('/candidatures/{id}/valider', [CandidatureController::class, 'valider'])->name('candidatures.valider');
Route::post('/candidatures/{id}/rejeter', [CandidatureController::class, 'rejeter'])->name('candidatures.rejeter');
