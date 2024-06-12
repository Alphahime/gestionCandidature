<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CandidatureController;

Route::get('/postuler', [CandidatureController::class, 'creer'])->name('candidatures.creer');
Route::post('/postuler', [CandidatureController::class, 'store'])->name('candidatures.store');
