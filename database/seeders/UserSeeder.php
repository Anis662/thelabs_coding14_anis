<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([

            "name"  =>  "Anis",
            
            "email"=>  "Anisberchem1189@gmail.com",
            
            'password'=>  Hash::make("testtest"),

            'role_id'=> 1,
            
            'photo'=> "macron.jpg",
            
            "created_at"=>  now()
            
            ]);
    }
}
