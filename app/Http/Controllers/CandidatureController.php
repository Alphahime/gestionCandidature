<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Candidature;
use Illuminate\Http\Request;
use App\Mail\CandidatureRejetee;
use App\Mail\CandidatureValidee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Notifications\CandidatureStatutNotification;
use Illuminate\Support\Facades\Notification;




class CandidatureController extends Controller
{public function creer($id)
    {
        $formation = Formation::findOrFail($id);
        return view('candidatures.creer', compact('formation'));
    }


    public function store(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        'biographie' => 'required|string|max:5000',
        'motivation' => 'required|string|max:5000',
        'cv' => 'required|file|mimes:pdf,doc,docx|max:2048'
    ]);

    // Traiter et enregistrer les données
    $candidature = new Candidature([

            'biographie' => $request->biographie,
            'motivation' => $request->motivation,
            'cv' => $request->cv,
            'updated_at' => now(),
            'created_at' => now(),
            'candidat_id' => Auth::id(),// Assigner l'ID du candidat connecté
            'formation_id' => $request->input('formation_id'),
        ]);

    // Gérer le téléchargement du fichier CV
    if ($request->hasFile('cv')) {
        $file = $request->file('cv');
        $path = $file->store('cvs', 'public');
        $candidature->cv = $path;
    }

    // Enregistrez la candidature dans la base de données
    $candidature->save();
    return redirect()->back()->with('success', 'Candidature soumise avec succès');
}


public function index()
{
    $candidatures = Candidature::all();
    // Afficher la vue 'candidatures.index' avec les données des candidatures
    return view('candidatures.index', compact('candidatures'));
}

public function updateStatus($id, $action)
{
    $candidature = Candidature::findOrFail($id);
    $formation = $candidature->formation->libelle;
    $created_at = $candidature->created_at->format('d/m/Y');

    if ($action == 'approve') {
        $status = 'acceptée';
        $candidature->status = 'approved';
    } elseif ($action == 'reject') {
        $status = 'rejetée';
        $candidature->status = 'rejected';
    }

    $candidature->save();

    // Envoyer la notification avec les informations supplémentaires
    $candidature->candidat->notify(new CandidatureStatutNotification($status, $formation, $created_at));

    return redirect()->route('candidatures.index')->with('success', 'Candidature mise à jour');
}
    public function detail($id)
    {
        // Récupération de la candidature par son ID avec les relations
        $candidature = Candidature::with('candidat')->findOrFail($id);

        // Affichage de la vue 'candidatures.detail' avec les détails de la candidature
        return view('candidatures.detail', compact('candidature'));
    }

}
