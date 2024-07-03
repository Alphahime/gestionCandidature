<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;use App\Http\Controllers\FormationController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\TestController;


// Route::get('/', function () {
//     return view('welcome');
// });
// Page d'accueil
Route::get('/', [LandingController::class, 'landing'])->name('landing');

// Routes pour les formations
Route::get('/explore', [FormationController::class, 'allformation'])->name('nos_formations');
Route::get('/indexdetail', [FormationController::class, 'detail'])->name('details_formation');
//Route::middleware(['auth'])->group(function () {

    Route::get('/liste', [FormationController::class, 'affiche_formation'])->name('personnels.liste');
    Route::get('/ajout_form', [PersonnelController::class, 'ajouter'])->name('formation.ajouter');
    Route::post('/ajout_traitement', [FormationController::class, 'ajouter_traitement'])->name('formation.ajouter_traitement');
    Route::get('/modif_form/{id}', [FormationController::class, 'Modifier'])->name('formation.modifier');
    Route::post('/modif_form/{id}', [FormationController::class, 'Modifier_traitement'])->name('formation.modifier_traitement');
    Route::get('/supprimer_form/{id}', [FormationController::class, 'supprimer'])->name('formation.supprimer');
//});

// Routes pour l'authentification
Route::get('/inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::post('/inscription', [AuthController::class, 'inscriptionPost'])->name('inscription');
Route::get('/connexion', [AuthController::class, 'connexion'])->name('connexion');
Route::post('/connexion', [AuthController::class, 'connexionPost'])->name('connexion');

// Routes pour le personnel

    Route::get('/personnel/connexion', [AuthController::class, 'connexionPersonnel'])->name('personnel.connexion');
    Route::post('/personnel/connexion', [AuthController::class, 'connexionPostPersonnel'])->name('personnel.connexion.post');
    Route::delete('/personnel/deconnexion', [AuthController::class, 'deconnexionPersonnel'])->name('deconnexion');


// Routes pour les candidatures
Route::middleware(['auth'])->group(function () {
    Route::get('/formations/{id}/postuler', [CandidatureController::class, 'creer'])->name('candidatures.formulaire');
    Route::post('/formations/{id}/postuler', [CandidatureController::class, 'store'])->name('candidatures.creer');
    Route::get('/candidatures', [CandidatureController::class, 'index'])->name('candidatures.index');
    Route::get('/candidatures/{id}', [CandidatureController::class, 'detail'])->name('candidatures.detail');
    Route::post('/candidatures/{id}/{action}', [CandidatureController::class, 'candidatureAction'])->name('candidatures.action');
});
Route::get('/formations/{id}/candidatures', [FormationController::class, 'candidatures'])->name('formations.candidatures');

Route::post('candidatures/updateStatus/{id}/{action}', [CandidatureController::class, 'updateStatus'])->name('candidatures.updateStatus');
Route::post('/candidatures/{id}/approve', [CandidatureController::class, 'updateStatus'])->name('candidatures.approve');
Route::post('/candidatures/{id}/reject', [CandidatureController::class, 'updateStatus'])->name('candidatures.reject');
