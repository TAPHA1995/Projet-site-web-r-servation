<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Critere extends Model
{
    use HasFactory;
    protected $fillable = ['nom','email','numero_tel','city','area','nombre_chambre','photo','type_property','price','bath','wifi','city_view','elevator','parking','level','date_of_availability'];
    

    public function cities()
    {
        return $this->belongsTo(City::class, 'citi_id');
    }
    public function areas()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($critere) {
            // Détache la vidéo de son cours parent et la supprime
            $areas = $critere->areas;
            if ($areas) {
                $areas->criteres()->where('id', $critere->id)->delete();
            }
        });
    }
    
}
