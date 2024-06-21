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
        $userId = auth()->user()->id; // Supposons que l'utilisateur est authentifié
        $candidat = Candidat::where('id', $userId)->first();
    
        // Validation des données de la candidature
        $validatedData = $request->validate([
            'formation_id' => 'required|exists:formations,id',
            'biographie' => 'required|string|max:5000',
            'motivation' => 'required|string|max:5000',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048'
            // Ajoutez d'autres règles de validation ici
        ]);
    
        // Vérifiez si le candidat a déjà postulé à la formation spécifiée
        $existingCandidature = Candidature::where('candidat_id', $candidat->id)
                                          ->where('formation_id', $validatedData['formation_id'])
                                          ->first();
    
        if ($existingCandidature) {
            return back()->with('error', 'Vous avez déjà postulé à cette formation.');
        }
    
        // Création de la nouvelle candidature
        $candidature = new Candidature([

            'biographie' => $request->biographie,
            'motivation' => $request->motivation,
            'cv' => $request->cv,
            'updated_at' => now(),
            'created_at' => now(),
            'candidat_id' => Auth::id(),// Assigner l'ID du candidat connecté
            'formation_id' => $request->input('formation_id'),
        ]);
        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $path = $file->store('cvs', 'public');
            $candidature->cv = $path;
        }
        
    // Enregistrez la candidature dans la base de données
    $candidature->save();
    
        return redirect()->route('candidatures.index')->with('success', 'Votre candidature a été soumise avec succès.');
    }
    

   

public function index()
{
    $candidatures = Candidature::all();
    // Afficher la vue 'candidatures.index' avec les données des candidatures
    return view('candidatures.index', compact('candidatures'));
}

public function candidatureAction(Request $request, $id, $action)
{
    // Charger la candidature avec les relations candidat et formation
    $candidature = Candidature::with(['candidat', 'formation'])->find($id);

    if (!$candidature) {
        return back()->with('error', 'Candidature non trouvée');
    }

    $candidat = $candidature->candidat;

    if ($action == 'validee') {
        Mail::to($candidat->email)->send(new CandidatureValidee($candidature));
        // Mettre à jour l'état ou faire d'autres actions nécessaires après validation
        return back()->with('success', 'Candidature validée et email envoyé');
    } elseif ($action == 'rejetee') {
        Mail::to($candidat->email)->send(new CandidatureRejetee($candidature));
        // Mettre à jour l'état ou faire d'autres actions nécessaires après rejet
        return back()->with('success', 'Candidature rejetée et email envoyé');
    }

    return back()->with('error', 'Action non reconnue');
}

    public function detail($id)
    {
        // Récupération de la candidature par son ID avec les relations
        $candidature = Candidature::with('candidat')->findOrFail($id);

        // Affichage de la vue 'candidatures.detail' avec les détails de la candidature
        return view('candidatures.detail', compact('candidature'));
    }

}
