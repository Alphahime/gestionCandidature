<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function inscription()
    {
        return view('candidats.inscription');
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
        dd($candidat);

        return back()->with('success', 'Inscription réussie');
    }

    public function connexion()
    {
        return view('candidats/connexion');
    }

    public function connexionPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'mot_de_passe' => 'required|string|min:8'
        ]);
    
        $credentials = [
            'email' => $request->email,
            'password' => $request->mot_de_passe // Toujours utiliser 'password' ici
        ];
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('index')->with('success', 'Connexion réussie');
        }
    
        return back()->with('error', 'Email ou mot de passe incorrect');
    }
    
}
