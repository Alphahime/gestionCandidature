<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('personnels', function (Blueprint $table) {
            $table->string('mot_de_passe')->after('email'); // Ajoute la colonne après la colonne 'email'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('personnels', function (Blueprint $table) {
            $table->dropColumn('mot_de_passe');
        });
    }
};
