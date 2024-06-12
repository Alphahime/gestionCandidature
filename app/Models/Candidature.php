<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'etat',
        'candidat_id',
        'formation_id',
       
    ];

    public function notifications(){
      return $this->hasMany(Notification::class);
    }
  

}
