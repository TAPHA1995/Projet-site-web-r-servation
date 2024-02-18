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

        Schema::create('reservation_finales', function (Blueprint $table) {
            $table->id();
            $table->decimal('Rent_per_month');
            $table->decimal('Utilities_per_month');
            $table->decimal('Monthly_subtotal');
            $table->decimal('One_time_cleaning_fee');
            $table->decimal('Total_charges');
            $table->decimal('Total');
            $table->integer('property_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('phone');
            $table->string('Purpose');
            $table->string('Name_of_Employer_Organisaition');
            $table->string('I_m_booking_on_behalf_of_someone_else');
            $table->string('name');
            $table->string('email_of_the_guest');
            $table->string('move_in');
            $table->string('move_out');
            $table->string('method_paiement');
            $table->string('numero_transaction');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
