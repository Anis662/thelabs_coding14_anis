<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("commentaires")->insert([
            
            "text"=> "akakakkaakakkakakakakakakakakakakakkaa",
            "user_id"=> 1,
            "article_id"=> 1,
            "created_at"=> now()


        ]);
    }
}
