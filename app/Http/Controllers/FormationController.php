<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function detail(){
        return view('formations.indexdetail');
    }
}
