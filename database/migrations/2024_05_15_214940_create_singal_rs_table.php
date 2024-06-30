<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('singal_rs', function (Blueprint $table) {

            $table->string('lien');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('ressource_id')->constrained('ressources');
            $table->timestamps();
            $table->primary(['user_id', 'ressource_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('singal_rs');
    }
};
