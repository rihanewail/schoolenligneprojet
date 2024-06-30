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
        Schema::create('commenters', function (Blueprint $table) {
            $table->string('text');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('ressource_id')->constrained('ressources');
            $table->primary(['user_id', 'ressource_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commenters');
    }
};
