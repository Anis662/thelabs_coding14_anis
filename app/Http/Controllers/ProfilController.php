<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        $roles = Role::all();
        $user = User::all();
        return view("profil",compact("roles","user"));
    }
}
