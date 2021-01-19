<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\Article;
use App\Models\Banner;
use App\Models\HomeContact;
use App\Models\ProfilTeam;
use App\Models\Ready;
use App\Models\ServiceHome;
use App\Models\Testimonial;
use App\Models\TitreService;
use App\Models\TitreSlogan;
use App\Models\TitreTeam;
use App\Models\TitreTesti;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        $banner = Banner::all();
        $serviceHome = ServiceHome::all();
        $aboutContent= AboutContent::all();
        $titreTesti= TitreTesti::all();
        $testimonial = Testimonial::all();
        $titreService = TitreService::all();
        $titreTeam = TitreTeam::all();
        $profilTeam = ProfilTeam::all();
        $titreSlogan = TitreSlogan::all();
        $ready = Ready::all();
        $homeContact= HomeContact::all();
        
        return view("adminHome",compact("banner","homeContact","serviceHome","aboutContent","titreTesti","testimonial","titreService","titreTeam","profilTeam","titreSlogan","ready"));
    }
}
