<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class AdminNewsletterController extends Controller
{
    public function index(){
        $newsletter = Newsletter::all();
        return view("adminNewsletter",compact("newsletter"));
    }
}
