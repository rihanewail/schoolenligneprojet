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
        Schema::create('participe_evns', function (Blueprint $table) {
            $table->foreignId('evenment_payment_id')->constrained('evenment_payments');
            $table->foreignId('etudient_id')->constrained('etudiants');
            $table->primary(['etudient_id', 'evenment_payment_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participe_evns');
    }
};
