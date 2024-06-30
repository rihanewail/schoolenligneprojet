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
        Schema::create('evenment_payments', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->dateTime('date');
            $table->integer('durre');  // Duration in minutes or hours
            $table->string('specialite');
            $table->decimal('prix', 8,2);
            $table->string('lien');
            $table->integer('nmbrDePlace');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenment_payments');
    }
};
