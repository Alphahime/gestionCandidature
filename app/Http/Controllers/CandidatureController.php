<?php
// app/Http/Controllers/CandidatureController.php
// app/Http/Controllers/CandidatureController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidat;

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
}
