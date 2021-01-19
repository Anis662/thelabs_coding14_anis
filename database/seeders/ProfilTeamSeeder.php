<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("profil_teams")->insert([
            "image"=> "1.jpg",
            "prenom"=> "Christinne Williams",
            "fonction"=> "PROJECT MANAGER",
        ]);
        DB::table("profil_teams")->insert([
            "image"=> "2.jpg",
            "prenom"=> "Anis El Ouahidi",
            "fonction"=> "CEO COMPANY",
        ]);
        DB::table("profil_teams")->insert([
            "image"=> "3.jpg",
            "prenom"=> "Bilal Guerfa",
            "fonction"=> "DIGITAL DESIGNER",
        ]);
    }
}
