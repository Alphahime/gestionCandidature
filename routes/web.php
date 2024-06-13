<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;

Route::get('/detailFormation',[FormationController::class, 'detail']);
