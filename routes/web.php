<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidatureController;

Route::get('/', function () {
    return view('welcome');
});

//Route pour le CRUD des Formations

Route::get('/liste_Perso', [PersonnelController::class,'liste']);

Route::get('/ajout_form', [PersonnelController::class,'ajouter']);

Route::post('/ajout_traitement', [FormationController::class,'ajouter_traitement']);

Route::get('/liste', [FormationController::class,'affiche_formation']);

Route::get('/modif_form/{id}', [FormationController::class,'Modifier']);

Route::post('/modif_form/{id}', [FormationController::class,'Modifier_traitement']);

Route::get('/supprimer_form/{id}', [FormationController::class,'supprimer']);

// Routes pour l'authentification

Route::get('/inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [AuthController::class, 'inscriptionPost'])->name('inscription');

Route::get('/connexion', [AuthController::class, 'connexion'])->name('connexion');
Route::post('/connexion', [AuthController::class, 'connexionPost'])->name('connexion');

// Routes pour postuler

Route::get('/postuler', [CandidatureController::class, 'creer'])->name('candidatures.creer');
Route::post('/postuler', [CandidatureController::class, 'store'])->name('candidatures.store');



















// Route::get('/liste', [PersonnelController::class,'liste']);


// Route::get('/ajout_form', [PersonnelController::class,'ajouter']);

// Route::post('/ajout_traitement', [FormationController::class,'ajouter_traitement']);

// Route::get('/liste', [FormationController::class,'affiche_formation']);

// Route::get('/modif_form/{id}', [FormationController::class,'Modifier']);

// Route::post('/modif_form/{id}', [FormationController::class,'Modifier_traitement']);

// Route::get('/supprimer_form/{id}', [FormationController::class,'supprimer']);