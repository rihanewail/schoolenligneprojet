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
        Schema::create('justificatin_compitences', function (Blueprint $table) {
            $table->id();
        $table->string('description');
    $table->foreignId('demande_dinscription_id')->constrained('demande_dinscriptions');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('justificatin_compitences');
    }
};
