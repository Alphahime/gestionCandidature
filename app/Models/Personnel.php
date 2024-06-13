<?php

// App\Models\Personnel.php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Correct import for user model
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personnel extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'adresse',
        'role',
        'email',
        'mot_de_passe', // ajoutez ici les champs nécessaires
    ];

    protected $hidden = [
        'mot_de_passe', 'remember_token',
    ];

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    // Ajouter cette méthode pour spécifier le champ personnalisé pour le mot de passe
    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }
}
