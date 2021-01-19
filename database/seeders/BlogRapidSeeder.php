<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogRapidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("blog_rapids")->insert([
            "image"=> "card-1.jpg",
            "titre"=> "GET IN THE LAB",
            "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        DB::table("blog_rapids")->insert([
            "image"=> "card-2.jpg",
            "titre"=> "PROJECTS ONLINE",
            "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
        DB::table("blog_rapids")->insert([
            "image"=> "card-3.jpg",
            "titre"=> "SMART MARKETING",
            "text"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.."
        ]);
    }
}
