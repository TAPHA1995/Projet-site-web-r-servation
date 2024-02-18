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
        Schema::table('criteres', function (Blueprint $table) {
            $table->unsignedBigInteger('citi_id')->nullable(); // Colonne pour la clé étrangère
            $table->foreign('citi_id')->references('id')->on('cities'); // Définition de la clé étrangère
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('criteres', function (Blueprint $table) {
            $table->dropForeign(['citi_id']); // Supprimer la clé étrangère
            $table->dropColumn('citi_id'); // Supprimer la colonne video_id
        });
    }
};
