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
        Schema::create('ajouter_article_tapha_a_s', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('photo');
            $table->string('titre');
            $table->string('contenu');
            $table->string('created_at');
            $table->string('update_at');
    });
    Schema::create('cities', function (Blueprint $table) {
        $table->id();
        $table->string('nomcity');
        $table->timestamps();
    });

}

public function down(): void
    {
        //
        Schema::dropIfExists('cities');
    }

};
