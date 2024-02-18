<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'purpose',
        'Name_of_Employer_Organisaition',
        'I_m_booking_on_behalf_of_someone_else',
        'name',
        'email_of_the_guest',
    ];
}

