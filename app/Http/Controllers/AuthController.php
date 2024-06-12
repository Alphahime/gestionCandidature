<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function inscription()
    {
        return view('inscription');
    }

    public function inscriptionPost(Request $request)
    {
        $request->validate([
            'nom' => 'required|min:3',
            'email' => 'required|email|unique:candidats,email',
            'mot_de_passe' => 'required|min:8|max:20'
        ]);

        $candidat = new Candidat();
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->telephone = $request->telephone;
        $candidat->adresse = $request->adresse;
        $candidat->age = $request->age;
        // $candidat->biographie = $request->biographie;
        // $candidat->motivation = $request->motivation;
        $candidat->cv = $request->cv;
        $candidat->email = $request->email;
        $candidat->mot_de_passe = Hash::make($request->mot_de_passe);

        $candidat->save();

        return back()->with('success', 'Inscription réussie');
    }
}
