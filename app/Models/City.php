<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = ['nomcity','critere_id'];

    public function criteres()
    {
        return $this->hasMany(Critere::class, 'citi_id');
    }
}
