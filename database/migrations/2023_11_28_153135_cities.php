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
        Schema::table('cities', function (Blueprint $table) {
            $table->unsignedBigInteger('critere_id')->nullable();; // Colonne pour la clé étrangère
            $table->foreign('critere_id')->references('id')->on('criteres'); // Définition de la clé étrangère
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cities', function (Blueprint $table) {
            $table->dropForeign(['critere_id']); // Supprimer la clé étrangère
            $table->dropColumn('critere_id'); // Supprimer la colonne cours_id
        });
    }
};
