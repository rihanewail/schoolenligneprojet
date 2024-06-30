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
        Schema::create('avoirpointdindintesets', function (Blueprint $table) {

            $table->foreignId('point_dinteset_id')->constrained('point_dintesets');
            $table->foreignId('etudiant_id')->constrained('etudiants');

            $table->primary(['etudiant_id', 'point_dinteset_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avoirpointdindintesets');
    }
};
