<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Candidature;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function candidatures($id)
    {
        // Récupérer la formation par son ID
        $formation = Formation::findOrFail($id);

        // Récupérer les candidatures associées à cette formation
        $candidatures = Candidature::where('formation_id', $id)->get();

        // Afficher la vue 'formations.candidatures' avec les données
        return view('personnels.candidature_form', compact('formation', 'candidatures'));
    }
 public function allformation(){
    $formations = Formation::all();
    return view('formations.allformation', compact('formations'));
 }
    public function affiche_formation(){

        $formations = Formation::all();
        return view('personnels.liste', compact('formations'));
    }

    public function liste_formation(){

        $formations = Formation::all();
        return view('acceuil.landing', compact('formations'));
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
        return redirect('/liste')->with( 'status', 'formation ajouté avec success');
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
        return redirect('/liste')->with( 'status', 'formation modifié avec success');
    }

    public function supprimer($id){
        $formation = Formation::find($id);
        $formation->delete();
        return redirect('/liste')->with( 'status', 'formation supprimé avec success');
    }
    public function detail(){
        return view('formations.indexdetail');

 }

}
