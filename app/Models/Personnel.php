<?php

// App\Models\Personnel.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'adresse',
        'role',
        'email',
    ];

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }
}
