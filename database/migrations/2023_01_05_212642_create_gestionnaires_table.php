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
        Schema::create('gestionnaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('sexe')->nullable();
            $table->string('date_ne')->nullable();
            $table->string('phone')->nullable();
            $table->string('etat_civil')->nullable();
            $table->string('role')->nullable();
            $table->string('image')->nullable();
            $table->string('password');
            $table->integer('active')->default(0);
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
        Schema::dropIfExists('gestionnaires');
    }
};
