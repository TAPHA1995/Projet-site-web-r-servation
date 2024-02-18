<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class booking_rooms extends Model
{
    use HasFactory, Searchable;
    protected $guarded = [''];

public function searchableAs()
{
     return 'city';
}
    // public function toSearchableArray(){

    //     $searchArray = [
    //            'city'->$this->title,
    //            'date_of_availability'->$this->date_of_availability,
    //            'number_of_guest'->$this->guest_number,
    //     ];
    //     return $searchArray;

    // }
}
// 'titre', 'how_many_rooms', 'how_many_bath', 'wifi', 'City_view', 'number_of_floor', 'elevator', 'parking', 'date_of_availability', 'price'