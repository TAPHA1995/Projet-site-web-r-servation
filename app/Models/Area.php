<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table = 'areas';
    protected $fillable = ['nomarea','critere_id'];

    public function criteres()
    {
        return $this->hasMany(Critere::class, 'area_id');
    }
}
