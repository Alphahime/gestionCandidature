<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\PersonnelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/liste', [PersonnelController::class,'liste']);


Route::get('/ajout_form', [PersonnelController::class,'ajouter']);

Route::post('/ajout_traitement', [FormationController::class,'ajouter_traitement']);

Route::get('/liste', [FormationController::class,'affiche_formation']);