<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreTestiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titre_testis")->insert([
            "titre"=> "WHAT (OUR) CLIENTS SAY"
        ]);
    }
}
