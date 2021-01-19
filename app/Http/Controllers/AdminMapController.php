<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use Illuminate\Http\Request;

class AdminMapController extends Controller
{
    public function index(){
        $adresse = Adresse::all();
        return view("map",compact("adresse"));
    }
}
