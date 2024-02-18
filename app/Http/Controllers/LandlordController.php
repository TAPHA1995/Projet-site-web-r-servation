<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    public function page_landlord()
    {
        return view('projet.landlord');
    }

    

}
