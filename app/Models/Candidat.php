<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Utiliser le trait Authenticatable
use Illuminate\Notifications\Notifiable;

class Candidat extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'telephone',
        'adresse',
        'email',
        'mot_de_passe',
        'biographie',
        'motivation',
        'cv',
    ];

    protected $hidden = [
        'mot_de_passe', // Cacher le champ mot_de_passe
    ];

    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }

    // Ajouter cette méthode pour spécifier le champ personnalisé pour le mot de passe
    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }
}
