<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use App\Models\Footer;
use App\Models\HomeContact;
use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(){
        if (Auth::user()) {
            $navbar = Navbar::all();
            $logo = Logo::all();
            $homeContact = HomeContact::all();
            $footer = Footer::all();
            $adresse = Adresse::first();
            return view("contact2",compact("navbar","adresse","footer","logo","homeContact"));
        } else{
            $navbar = Navbar::all();
            $logo = Logo::all();
            $homeContact = HomeContact::all();
            $footer = Footer::all();
            $adresse = Adresse::first();

            return view("contact",compact("navbar","adresse","footer","logo","homeContact"));
        }
    }
}
