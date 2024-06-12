<?php
// App\Models\Candidat.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'telephone', 
        'adresse',
        'email',
        'biographie', 
        'motivation',
        'cv',
    ];

    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }
}
