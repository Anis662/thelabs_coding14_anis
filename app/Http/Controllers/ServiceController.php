<?php

namespace App\Http\Controllers;

use App\Models\BlogRapid;
use App\Models\Footer;
use App\Models\HomeContact;
use App\Models\IconePrime;
use App\Models\Logo;
use App\Models\Navbar;
use App\Models\Newsletter;
use App\Models\ServiceHome;
use App\Models\ServicePrime;
use App\Models\TitreService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class ServiceController extends Controller
{
    public function index(){
        if (Auth::user()) {

            $navbar = Navbar::all();
            $logo = Logo::all();
            $serviceHome = ServiceHome::paginate(9,['*'],"serviceHome");

            $titreService = TitreService::first();
            $str5 = Str::of($titreService->titre)->replace('(', '<span>');
            $str6 = Str::of($str5)->replace(')', '</span>');

            $homeContact = HomeContact::all();

            $servicePrime = ServicePrime::first();
            $str9 = Str::of($servicePrime->titre)->replace('(', '<span>');
            $str10 = Str::of($str9)->replace(')', '</span>');
            $iconePrime = IconePrime::all();
            $blogRapid = BlogRapid::all();
            $newsletter = Newsletter::all();
            $footer = Footer::all();



           return view("service2",compact("navbar","footer","newsletter","blogRapid","str9","str10","logo","serviceHome","titreService","homeContact","str5","str6","servicePrime","iconePrime"));
        } else{
            $navbar = Navbar::all();
            $logo = Logo::all();
            $serviceHome = ServiceHome::paginate(9,['*'],"serviceHome",);

            $titreService = TitreService::first();
            $str5 = Str::of($titreService->titre)->replace('(', '<span>');
            $str6 = Str::of($str5)->replace(')', '</span>');

            $homeContact = HomeContact::all();
            $servicePrime = ServicePrime::first();
            $str9 = Str::of($servicePrime->titre)->replace('(', '<span>');
            $str10 = Str::of($str9)->replace(')', '</span>');
            $iconePrime = IconePrime::all();
            $blogRapid = BlogRapid::all();
            $newsletter = Newsletter::all();
            $footer = Footer::all();


            return view("service",compact("navbar","footer", "newsletter","blogRapid","str9","str10","logo","serviceHome","titreService","homeContact","str5","str6","servicePrime","iconePrime"));

        }
    }
}
