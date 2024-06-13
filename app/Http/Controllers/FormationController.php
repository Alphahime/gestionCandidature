<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{


    public function affiche_formation(){

        $formations = Formation::all();
        return view('personnels.liste', compact('formations'));
    }




    public function ajouter_traitement(Request $request){
        $request->validate ([
            'libelle'=>'required',
            'lieu'=>'required',
            'description'=>'required',
            'horaire'=>'required',
            'duree'=>'required',
            'dateLimite'=>'required',
            'datePublication'=>'required',
            'dateDebut'=>'required',
        ]);

        $formation = new Formation();
        $formation->libelle = $request->libelle;
        $formation->lieu = $request->lieu;
        $formation->description = $request->description;
        $formation->horaire = $request->horaire;
        $formation->duree = $request->duree;
        $formation->dateLimite = $request->dateLimite;
        $formation->datePublication = $request->datePublication;
        $formation->dateDebut = $request->dateDebut;
       // $formation->personnel_id = auth()->user()->id;
        $formation->save();
        return back()->with( 'status', 'formation ajouté avec success');



    }
}
