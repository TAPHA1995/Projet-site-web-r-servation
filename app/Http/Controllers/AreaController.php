<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AreaController extends Controller
{
    public function showareas()
    {
        
    
    return view('area');
    }

    public function store_areas(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nomarea' => 'required|string|max:255',
            
        ]);
    
        
    
        $area = new Area();
        $area->nomarea = $request->nomarea;
        
        $area->save();
    
        // Si vous avez besoin de gérer le téléchargement de la vidéo, vous pouvez le faire ici.
    
        return redirect()->back()->with('success', 'Cours ajouté avec succès');
    }
}
