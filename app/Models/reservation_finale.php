<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation_finale extends Model
{
    use HasFactory;
    protected $filiable = [
        'Rent_per_month',
        'Utilities_per_month',
        'Monthly_subtotal',
        'One_time_cleaning_fee',
        'Total_charges',
        'Total',
        'property_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'Purpose',
        'Name_of_Employer_Organisaition',
        'I_m_booking_on_behalf_of_someone_else',
        'name',
        'email_of_the_guest',
        'move_in',
        'move_out',
        'method_paiement',
    ];

}
