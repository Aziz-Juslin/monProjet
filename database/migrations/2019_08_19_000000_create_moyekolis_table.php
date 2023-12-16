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
        Schema::create('moyekolis', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('code_eleve');
            $table->string('nom');
            $table->string('post_nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('date_ne');
            $table->string('lieu');
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
        Schema::dropIfExists('moyekolis');
    }
};
