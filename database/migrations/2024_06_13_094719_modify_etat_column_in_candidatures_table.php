<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyEtatColumnInCandidaturesTable extends Migration
{
    public function up()
    {
        Schema::table('candidatures', function (Blueprint $table) {
            $table->enum('etat', ['validee', 'rejetee'])->default('validee')->change();
        });
    }

    public function down()
    {
        Schema::table('candidatures', function (Blueprint $table) {
            $table->string('etat')->change();
        });
    }
}
