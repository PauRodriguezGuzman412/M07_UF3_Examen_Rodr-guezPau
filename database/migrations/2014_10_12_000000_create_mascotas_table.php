<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nick');
            $table->string('password');
            $table->string('raça')->enum('Boxer','Buldog','Labrador','Caniche');
            $table->string('sexe')->enum('Mascle','Femella');
            $table->integer('edat');
            $table->string('color');
            $table->string('nom_huma');
            $table->string('telefon_huma');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
