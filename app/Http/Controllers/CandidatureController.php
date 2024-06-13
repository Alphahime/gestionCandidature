<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Candidat;
use App\Mail\CandidatureValidee;
use App\Mail\CandidatureRejetee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CandidatureController extends Controller
{
    public function creer()
    {
        return view('candidatures.creer');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'age' => 'required|integer',
            'telephone' => 'required|string',
            'adresse' => 'required|string',
            'email' => 'required|email',
            'biographie' => 'required|string',
            'motivation' => 'required|string',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        Candidat::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'biographie' => $request->biographie,
            'motivation' => $request->motivation,
            'cv' => $cvPath,
        ]);

        return redirect()->route('candidatures.creer')->with('success', 'Votre candidature a été soumise avec succès.');
    }

    public function index()
    {
        $candidatures = Candidat::latest()->get(); // Récupère toutes les candidatures, triées par date de création décroissante

        return view('candidatures.index', compact('candidatures'));
    }



    public function candidatureAction(Request $request, $id, $action)
{
    $candidat = Candidat::find($id);

    if (!$candidat) {
        return back()->with('error', 'Candidat non trouvé');
    }

    if ($action == 'valider') {
        Mail::to($candidat->email)->send(new CandidatureValidee($candidat));
        // Mettre à jour l'état ou faire d'autres actions nécessaires après validation
        return back()->with('success', 'Candidature validée et email envoyé');
    } elseif ($action == 'rejeter') {
        Mail::to($candidat->email)->send(new CandidatureRejetee($candidat));
        // Mettre à jour l'état ou faire d'autres actions nécessaires après rejet
        return back()->with('success', 'Candidature rejetée et email envoyé');
    }

    return back()->with('error', 'Action non reconnue');
}

}
