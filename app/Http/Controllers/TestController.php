<?php

namespace App\Http\Controllers;

use App\Mail\CandidatureValidee;
use App\Models\Candidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function bar()
    {
        
        // Récupérer un candidat existant ou en créer un pour l'exemple
        $candidat = Candidat::find(1); // Vous pouvez remplacer 1 par l'ID du candidat

        if ($candidat) {
            Mail::to('ndeyeba043@gmail.com')->send(new CandidatureValidee($candidat));

            return view('accueil.bar')->with('success', 'Email envoyé avec succès');
        }

        return view('candidatures.valider')->with('error', 'Candidat non trouvé');
    }
}
