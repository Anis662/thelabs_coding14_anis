<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconePrimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("icone_primes")->insert([
            "titre"=> "Get in the lab",
            "text"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "icone"=> "flaticon-002-caliper"    
        ]);
        DB::table("icone_primes")->insert([
            "titre"=> "Projects online",
            "text"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "icone"=> "flaticon-019-coffee-cup"    
        ]);
        DB::table("icone_primes")->insert([
            "titre"=> "SMART MARKETING",
            "text"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "icone"=> "flaticon-020-creativity"    
        ]);
        DB::table("icone_primes")->insert([
            "titre"=> "Get in the lab",
            "text"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "icone"=> "flaticon-037-idea"    
        ]);
        DB::table("icone_primes")->insert([
            "titre"=> "Get in the lab",
            "text"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "icone"=> "flaticon-037-idea"    
        ]);
        DB::table("icone_primes")->insert([
            "titre"=> "Projects online",
            "text"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "icone"=> "flaticon-025-imagination"    
        ]);
        DB::table("icone_primes")->insert([
            "titre"=> "SMART MARKETING",
            "text"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "icone"=> "flaticon-008-team"    
        ]);
        DB::table("icone_primes")->insert([
            "titre"=> "SMART MARKETING",
            "text"=> "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            "icone"=> "flaticon-008-team"    
        ]);
    }
}
