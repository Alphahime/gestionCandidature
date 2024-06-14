<?php

namespace App\Mail;

use App\Models\Candidat;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CandidatureValidee extends Mailable
{
    use Queueable, SerializesModels;

    public $candidature;

    public function __construct(Candidat $candidature)
    {
        $this->candidature = $candidature;
    }

    public function build()
    {
        return $this->from('adiaratououmyfall@gmail.com')->subject('Votre candidature a été validée')
                    ->view('candidatures.valider');
    }
}
