<?php
// App\Models\Notification.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'dateEnvoie',
        'candidature_id',
    ];

    public function candidature()
    {
        return $this->belongsTo(Candidature::class);
    }
}
