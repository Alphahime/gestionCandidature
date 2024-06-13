<?php
// app/Http/Controllers/CandidatureController.php
// app/Http/Controllers/CandidatureController.php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Candidature;
use Illuminate\Http\Request;
use App\Mail\CandidatureRejetee;
use App\Mail\CandidatureValidee;
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
public function valider($id)
{
    $candidature = Candidature::findOrFail($id);
    $candidature->etat = 'validee'; // Assurez-vous que 'validee' est une valeur valide pour votre enum
    $candidature->save();

    // Envoyer un e-mail de confirmation de validation
    Mail::to($candidature->candidat->email)->send(new CandidatureValidee($candidature)); // Exemple d'utilisation de la relation pour accéder à l'email du candidat

    return redirect()->back()->with('success', 'La candidature a été validée.');
}

public function rejeter($id)
{
    $candidature = Candidature::findOrFail($id);
    $candidature->etat = 'rejetee'; // Assurez-vous que 'rejetee' est une valeur valide pour votre enum
    $candidature->save();

    // Envoyer un e-mail de rejet
    Mail::to($candidature->candidat->email)->send(new CandidatureRejetee($candidature)); // Exemple d'utilisation de la relation pour accéder à l'email du candidat

    return redirect()->back()->with('success', 'La candidature a été rejetée.');
}

}
