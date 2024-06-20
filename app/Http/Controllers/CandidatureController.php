<?php

namespace App\Http\Controllers;

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
        // Validation des données de candidature
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

        // Stockage du CV dans le dossier 'cvs' du répertoire 'public'
        $cvPath = $request->file('cv')->store('cvs', 'public');

        // Création d'un nouveau candidat dans la base de données
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

        // Redirection vers la page de création de candidature avec un message de succès
        return redirect()->route('candidatures.creer')->with('success', "Votre candidature a été soumise avec succès. Vous serez notifié par email pour l'état de votre candidature");
    }

    public function index()
    {
        // Récupération de toutes les candidatures triées par date de création décroissante
        $candidatures = Candidat::latest()->get();

        // Affichage de la vue 'candidatures.index' avec les données des candidatures
        return view('candidatures.index', compact('candidatures'));
    }

    public function candidatureAction(Request $request, $id)
    {
        $request->validate([
            'action' => 'required|in:valider,rejeter', // Validation de l'action
        ]);

        $candidat = Candidat::findOrFail($id); // Récupération du candidat par son ID

        // Envoi d'email et mise à jour de l'état du candidat en fonction de l'action
        if ($request->action == 'valider') {
            Mail::to($candidat->email)->send(new CandidatureValidee($candidat));
            // Mettre à jour l'état du candidat si nécessaire
            $candidat->etat = 'validee';
        } elseif ($request->action == 'rejeter') {
            Mail::to($candidat->email)->send(new CandidatureRejetee($candidat));
            // Mettre à jour l'état du candidat si nécessaire
            $candidat->etat = 'rejetee';
        }

        $candidat->save(); // Sauvegarde des modifications du candidat

        // Redirection vers la liste des candidatures avec un message de succès
        return redirect()->route('candidatures.index')->with('success', 'Action effectuée avec succès.');
    }

    public function detail($id)
    {
        // Récupération du candidat par son ID pour afficher les détails
        $candidature = Candidat::findOrFail($id);

        // Affichage de la vue 'candidatures.detail' avec les détails du candidat
        return view('candidatures.detail', compact('candidature'));
    }
}
