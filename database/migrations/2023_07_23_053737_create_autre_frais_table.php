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
        Schema::create('autre_frais', function (Blueprint $table) {
            $table->id();
            $table->string('franc')->nullable();
            $table->string('dollar')->nullable();
            $table->string('categorie')->nullable();
            $table->string('trimestre')->nullable();
            $table->string('date_paye');
            $table->string('anneesco');
            $table->foreignID('moyekoli_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('autre_frais');
    }
};
