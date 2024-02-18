<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class criteres extends Model
{
    use HasFactory;
    protected $fillable = ['nom','email','numero_tel','city','area','nombre_chambre','photo','type_property','price','bath','wifi','city_view','elevator','parking','level','date_of_availability'];
    

}
