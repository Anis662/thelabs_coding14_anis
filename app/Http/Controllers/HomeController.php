<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\Banner;
use App\Models\Footer;
use App\Models\HomeContact;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\ProfilTeam;
use App\Models\Ready;
use App\Models\ServiceHome;
use App\Models\Testimonial;
use App\Models\TitreService;
use App\Models\TitreSlogan;
use App\Models\TitreTeam;
use App\Models\TitreTesti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index(){
        if (Auth::user()) {
           
            $navbar = Navbar::all();
            $logo = Logo::all();
            $banner = Banner::all();
            $serviceHome = ServiceHome::paginate(9,['*'],"serviceHome");
            $serviceCard = ServiceHome::all();
            // $aboutContent = AboutContent::all();
            $titreTesti = TitreTesti::first();
            $str3 = Str::of($titreTesti->titre)->replace('(', '<span>');
            $str4 = Str::of($str3)->replace(')', '</span>');
            
            $testimonial = Testimonial::all();

            $titreService = TitreService::first();
            $str5 = Str::of($titreService->titre)->replace('(', '<span>');
            $str6 = Str::of($str5)->replace(')', '</span>');

            $titreTeam = TitreTeam::first();
            $str7 = Str::of($titreTesti->titre)->replace('(', '<span>');
            $str8 = Str::of($str7)->replace(')', '</span>');

            $profilTeam = ProfilTeam::inRandomOrder()->get();
            $titreSlogan = TitreSlogan::all();
            $ready = Ready::all();
            $homeContact = HomeContact::all();

            $aboutContent = AboutContent::first();
            $str = Str::of($aboutContent->titre)->replace('(', '<span>');
            $str2 = Str::of($str)->replace(')', '</span>');
            $footer = Footer::all();
            $stop = 1;
            $id = 0;

            return view("home2",compact("navbar","id","stop","footer","homeContact","ready","serviceCard","logo","banner","serviceHome","aboutContent","titreTesti","testimonial","titreService","titreTeam","str", "str2","profilTeam","titreSlogan","str3","str4","str5","str6","str7","str8"));
        } else{
            
            $navbar = Navbar::all();
            $logo = Logo::all();
            $banner = Banner::all();
            $serviceHome = ServiceHome::paginate(9,['*'],"serviceHome");
            $serviceCard = ServiceHome::all();
            // $aboutContent = AboutContent::all();
            $titreTesti = TitreTesti::first();
            $str3 = Str::of($titreTesti->titre)->replace('(', '<span>');
            $str4 = Str::of($str3)->replace(')', '</span>');
            $testimonial = Testimonial::all();

            $titreService = TitreService::first();
            $str5 = Str::of($titreService->titre)->replace('(', '<span>');
            $str6 = Str::of($str5)->replace(')', '</span>');

            $titreTeam = TitreTeam::first();
            $str7 = Str::of($titreTesti->titre)->replace('(', '<span>');
            $str8 = Str::of($str7)->replace(')', '</span>');

            $profilTeam = ProfilTeam::inRandomOrder()->get();
            $titreSlogan = TitreSlogan::all();
            $ready = Ready::all();
            $homeContact = HomeContact::all();

            $aboutContent = AboutContent::first();
            $str = Str::of($aboutContent->titre)->replace('(', '<span>');
            $str2 = Str::of($str)->replace(')', '</span>');
            $footer = Footer::all();
            $stop = 1;
            $id = 0;

            return view("home",compact("stop","id","navbar","footer","homeContact","ready","serviceCard","logo","banner","serviceHome","aboutContent","titreTesti","testimonial","titreService","titreTeam","profilTeam","titreSlogan","str","str2","str3","str4","str5","str6","str7","str8"));
        }
    }
}
