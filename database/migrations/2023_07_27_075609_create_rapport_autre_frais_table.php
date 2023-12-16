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
        Schema::create('rapport_autre_frais', function (Blueprint $table) {
            $table->id();
            $table->string('franc')->nullable();
            $table->string('dollar')->nullable();
            $table->string('date_rapport')->nullable();
            $table->string('annee_rapport')->nullable();
            $table->string('jour')->nullable();
            $table->foreignID('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('rapport_autre_frais');
    }
};
