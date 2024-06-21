<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Personnel;
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
            'prenom' => 'required|min:3',
            'telephone' => 'required',
            'adresse' => 'required|min:3',
            'age' => 'required',
            'cv' => 'required',
            'email' => 'required|email|unique:candidats,email',
            'mot_de_passe' => 'required|min:8|max:20'
        ]);

        $candidat = new Candidat();
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->telephone = $request->telephone;
        $candidat->adresse = $request->adresse;
        $candidat->age = $request->age;
        $candidat->cv = $request->cv;
        $candidat->email = $request->email;
        $candidat->mot_de_passe = Hash::make($request->mot_de_passe);
        $candidat->save();

        return back()->with('success', 'Inscription réussie');
    }

    public function connexion(Request $request)
    {
        // Récupérez l'ID de la formation depuis la requête (si disponible)
        $formationId = $request->input('formation_id');

        // Trouvez la formation par son ID
        $formation = Formation::find($formationId);

        // Retournez la vue avec la formation
        return view('candidats.connexion', compact('formation'));
    }


    public function connexionPost(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'mot_de_passe' => 'required|string|min:8'
    ]);

    $credentials = [
        'email' => $request->email,
        'password' => $request->mot_de_passe
    ];

    if ($request->has('personnel')) {
        // Authentification du personnel
        if (Auth::guard('personnel')->attempt($credentials)) {
            return redirect()->route('formation.liste')->with('success', 'Connexion réussie');
        }
    } else {
        // Authentification du candidat
        if (Auth::guard('web')->attempt($credentials)) {
            $formationId = $request->input('formation_id');
            return redirect()->route('candidatures.formulaire', ['id' => $formationId])->with('success', 'Connexion réussie');
        }
    }

    return back()->with('error', 'Email ou mot de passe incorrect');
}


    public function deconnexion()
    {
        Auth::logout();
        return redirect()->route('connexion');
    }

    public function connexionPersonnel()
    {
        return view('personnel/connexion');
    }
    public function connexionPostPersonnel(Request $request){
        $personnel = Personnel::where('email', $request->email)->first();

        if ($personnel && md5($request->mot_de_passe) == $personnel->mot_de_passe) {
            Auth::login($personnel);
            return redirect()->route('candidatures.index')->with('success', 'Connexion réussie');
        }

        return false;


    }

    public function deconnexionPersonnel()
    {
        Auth::logout();
        return redirect()->route('personnel.connexion');
    }


}
