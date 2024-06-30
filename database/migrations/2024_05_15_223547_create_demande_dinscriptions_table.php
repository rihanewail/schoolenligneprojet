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
        Schema::create('demande_dinscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
    $table->string('prenom');
    $table->string('email');
    $table->string('lien');
    $table->string('specialite');
    $table->string('matricule');
    $table->string('tel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_dinscriptions');
    }
};
