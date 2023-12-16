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
        Schema::create('modalites', function (Blueprint $table) {
            $table->id();
            $table->string('classe')->nullable();
            $table->integer('montant_franc')->nullable();
            $table->integer('montant_dollar')->nullable();
            $table->string('cycles')->nullable();
            $table->string('annee_modalite')->nullable();
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
        Schema::dropIfExists('modalites');
    }
};
