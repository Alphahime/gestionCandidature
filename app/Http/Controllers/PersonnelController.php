<?php

namespace App\Http\Controllers;


class PersonnelController extends Controller
{
    public function liste(){
        return view('personnels.liste');
    }


    public function ajouter(){
        return view('personnels.ajout_form');
    }


    


}
