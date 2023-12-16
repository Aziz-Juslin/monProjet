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
        Schema::create('mobotis', function (Blueprint $table) {
            $table->id();
            $table->string('code_parent');
            $table->string('nom');
            $table->string('profession')->nullable();
            $table->string('photo_parent')->nullable();
            $table->string('phone_parent')->nullable();;
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
        Schema::dropIfExists('mobotis');
    }
};
