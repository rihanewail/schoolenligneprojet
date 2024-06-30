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
        Schema::create('piecejrs', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('type');
            $table->string('lien');
            $table->foreignId('ressource_id')->constrained('ressources');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piece_j_r_s');
    }
};
