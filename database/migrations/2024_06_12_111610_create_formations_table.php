<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->text('description');
            $table->string('lieu');
            $table->string('duree');
            $table->string('horaire');
            $table->timestamp('datePublication');
            $table->date('dateDebut');
            $table->date('dateLimite');
            $table->foreignId('personnel_id')->constrained('personnels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
