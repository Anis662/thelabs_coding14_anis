<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("banners")->insert([
            "image"=> "01.jpg",
            // "image2"=> "02.jpg",
        ]);
    }
}
