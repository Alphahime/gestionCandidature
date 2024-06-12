<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [

        'libelle',
        'duree',
        'description',
        'lieu',
        'datePublication',
        'dateLimite',
        'dateDebut',
        'personnel_id',
        
    ];

  

    public function candidatures (){
        return $this->hasMany(Candidature::class);
    }
    public function personnel (){
        return $this->belongsTo(Personnel::class);
    }



}
