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

    //     Schema::create('contacts', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('un');
    //         $table->string('nom');
    //         $table->string('email')->unique();
    //         $table->string('tel');
    //         $table->string('created_at');
    //         $table->string('updated_at');
    // });
    // Schema::create('cities', function (Blueprint $table) {
    //     $table->id();
    //     $table->string('nomcity');
    //     $table->timestamps();
    // });
 }

public function down(): void
{
    // Schema::dropIfExists('cities');
}
};
