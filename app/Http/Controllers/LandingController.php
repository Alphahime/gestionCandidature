<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function landing()
    {
        $formations = Formation::all();
        return view('acceuil.landing',compact('formations'));
    }
}
