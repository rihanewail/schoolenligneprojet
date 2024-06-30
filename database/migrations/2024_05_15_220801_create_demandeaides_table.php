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
        Schema::create('demandeaides', function (Blueprint $table) {
            $table->foreignId('enseignant_id')->constrained('enseignants');
            $table->foreignId('etudiant_id')->constrained('etudiants');
            $table->foreignId('ressource_id')->constrained('ressources');
            $table->string('contenu');
            $table->string('repence');
            $table->primary(['etudiant_id', 'enseignant_id','ressource_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_aides');
    }
};
