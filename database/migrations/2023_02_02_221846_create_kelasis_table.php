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
        Schema::create('kelasis', function (Blueprint $table) {
            $table->id();
            $table->string('classe');
            $table->string('cycle');
            $table->string('option')->nullable();
            $table->string('local');
            $table->string('phone');
            $table->string('photo_eleve')->nullable();
            $table->string('adresse');
            $table->foreignId('moyekoli_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('kelasis');
    }
};
