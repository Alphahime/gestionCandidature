<?php
// App\Models\Candidature.php
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
        'biographie',
        'motivation',
        'cv',
    
    ];

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
