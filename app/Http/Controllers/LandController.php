<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use App\Models\Critere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LandController extends Controller
{
    public function showcities()
    {
        
    
    return view('citi');
    }


    public function store_cities(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nomcity' => 'required|string|max:255',
        
    ]);

    

    $citi = new City();
    $citi->nomcity = $request->nomcity;
    
    $citi->save();

    // Si vous avez besoin de gérer le téléchargement de la vidéo, vous pouvez le faire ici.

    return redirect()->back()->with('success', 'Cours ajouté avec succès');
}

public function showlandlord()
    {
        
        $cities = City::all();
        $areas=Area::all();
        return view('projet.landlord',compact('cities','areas'));
    }

    public function store_critere(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nom' => 'required|string|max:255',
        'email' => 'required|email|max:255', 
        'numero_tel' => 'required|numeric', 
        'city' => 'required',
        'area' => 'required',
        'nombre_chambre'=>'required',
        'photo'=>'required',
        'type_property'=>'required',
        'price'=>'required',
        'bath'=>'required',
        'wifi'=>'required',
        'city_view'=>'required',
        'elevator'=>'required',
        'parking'=>'required',
        'level'=>'required',
        'date_of_availability'=>'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $file = $request->file('photo');
    $file->move('images_property',$file->getClientOriginalName());
    $file_name=$file->getClientOriginalName();
    $critere = new Critere();
    $critere->nom = $request->nom;
    $critere->email = $request->email;
    $critere->numero_tel = $request->numero_tel;
    $critere->city = $request->city;
    $critere->area = $request->area;
    $critere->nombre_chambre=$request->nombre_chambre;
    $critere->photo = $file_name;
    $critere->type_property=$request->input('type_property');
    $critere->price=$request->input('price');
    $critere->bath=$request->input('bath');
    $critere->wifi=$request->input('wifi');
    $critere->city_view=$request->input('city_view');
    $critere->elevator=$request->input('elevator');
    $critere->parking=$request->input('parking');
    $critere->level=$request->input('level');
    $critere->date_of_availability=$request->input('date_of_availability');
    $critere->save();

    // Si vous avez besoin de gérer le téléchargement de la vidéo, vous pouvez le faire ici.

    return redirect()->back()->with('success', 'Enregistrement effetué avec succès');
}

public function edite_property_update(Request $request, $id)
{
    $file = $request->file('photo');
    $file->move('images_property',$file->getClientOriginalName());
    $file_name=$file->getClientOriginalName();

    // $critere = Critere::find($id);
    // $critere->nom = $request->input('nom');
    // $critere->email = $request->input('email');
    // $critere->numero_tel = $request->input('numero_tel');
    // $critere->city = $request->input('city');
    // $critere->area = $request->input('area');
    // $critere->nombre_chambre=$request->input('nombre_chambre');
    $critere = Critere::find($id);
    $critere->nom = $request->nom;
    $critere->email = $request->email;
    $critere->numero_tel = $request->numero_tel;
    $critere->city = $request->city;
    $critere->area = $request->area;
    $critere->nombre_chambre=$request->nombre_chambre;
    $critere->photo = $file_name;
    $critere->type_property=$request->input('type_property');
    $critere->price=$request->input('price');
    $critere->bath=$request->input('bath');
    $critere->wifi=$request->input('wifi');
    $critere->city_view=$request->input('city_view');
    $critere->elevator=$request->input('elevator');
    $critere->parking=$request->input('parking');
    $critere->level=$request->input('level');
    $critere->date_of_availability=$request->input('date_of_availability');
    $critere->save();
    // Si vous avez besoin de gérer le téléchargement de la vidéo, vous pouvez le faire ici.
    return redirect('booking')->with('success', 'Modification effetuée avec succès');
   }

public function liste_critere(){

    /*$areas = Area::select('areas.*', 'criteres.nom as cours_titre')
    ->join('criteres', 'areas.critere_id', '=', 'criteres.id')
    ->get();*/

    $criteres = Critere::with('areas', 'cities')->get();
   // $criteres = Critere::all();

    return view('liste_critere', compact('criteres'));
}

public function supprimer_critere($id)
{
    $critere = Critere::find($id);

    if (!$critere) {
        return redirect('booking')->with('error', 'Critere non trouvée.');
    }

    $critere->delete();

    return redirect('booking')->with('fail', 'Proprité supprimée avec succès.');
}

public function liste_area()
    {
        $areas=Area::all();
        return view('liste_area',compact('areas'));
    }

    public function supprimer_area($id)
{
    $area = Area::find($id);

    if (!$area) {
        return redirect()->route('liste_area')->with('error', 'Area non trouvée.');
    }

    $area->delete();

    return redirect()->route('liste_area')->with('fail', 'Area supprimée avec succès.');
}

public function liste_citi()
    {
        $cities=City::all();
        return view('liste_citi',compact('cities'));
    }

    public function supprimer_citi($id)
    {
        $citi = City::find($id);
    
        if (!$citi) {
            return redirect()->route('liste_citi')->with('error', 'City non trouvée.');
        }
    
        $citi->delete();
    
        return redirect()->route('liste_citi')->with('fail', 'City supprimée avec succès.');
    }

}
