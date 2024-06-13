<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{


    public function affiche_formation(){

        $formations = Formation::all();
        return view('personnels.liste_Perso', compact('formations'));
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
        return redirect('/liste_Perso')->with( 'status', 'formation ajouté avec success');
    }

    public function Modifier($id){
        
        $formation = Formation::find($id);
        return view('personnels.modif_form', compact('formation'));
    }

    public function Modifier_traitement(Request $request){
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

        $formation = Formation::find($request->id);
        $formation->libelle = $request->libelle;
        $formation->lieu = $request->lieu;
        $formation->description = $request->description;
        $formation->horaire = $request->horaire;
        $formation->duree = $request->duree;
        $formation->dateLimite = $request->dateLimite;
        $formation->datePublication = $request->datePublication;
        $formation->dateDebut = $request->dateDebut;
        $formation->save();
        return redirect('/liste_Perso')->with( 'status', 'formation modifié avec success');
    }

    public function supprimer($id){
        $formation = Formation::find($id);
        $formation->delete();
        return redirect('/liste_Perso')->with( 'status', 'formation supprimé avec success');
    }
}
