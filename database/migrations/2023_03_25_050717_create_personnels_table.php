<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('slug');
            $table->string('post_nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('code_perso');
            $table->string('date_ne');
            $table->string('phone');
            $table->string('etat_civil');
            $table->string('qualification');
            $table->string('fonction');
            $table->string('adresse');
            $table->string('photo_personnel')->nullable();
            $table->string('annee_scolaire');
            $table->tinyInteger('active')->default(0);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnels');
    }
};
