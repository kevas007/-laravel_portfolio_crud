<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                'filter'=>"app",
                "lien"=>"portfolio-1.jpg",
                "titre"=>"App 1",
                "created_at"=>now(),
            ],
            [
                'filter'=>"web",
                "lien"=>"portfolio-2.jpg",
                "titre"=>"Web 1",
                "created_at"=>now(),
            ],
            [
                'filter'=>"app",
                "lien"=>"portfolio-3.jpg",
                "titre"=>"App 2",
                "created_at"=>now(),
            ],
            [
                'filter'=>"card",
                "lien"=>"portfolio-4.jpg",
                "titre"=>"Card 2",
                "created_at"=>now(),
            ],
            [
                'filter'=>"web",
                "lien"=>"portfolio-5.jpg",
                "titre"=>"Web 2",
                "created_at"=>now(),
            ],
            [
                'filter'=>"app",
                "lien"=>"portfolio-6.jpg",
                "titre"=>"App 3",
                "created_at"=>now(),
            ],
            [
                'filter'=>"card",
                "lien"=>"portfolio-7.jpg",
                "titre"=>"Card 1",
                "created_at"=>now(),
            ],
            [
                'filter'=>"card",
                "lien"=>"portfolio-8.jpg",
                "titre"=>"Card 4",
                "created_at"=>now(),
            ],
            [
                'filter'=>"web",
                "lien"=>"portfolio-9.jpg",
                "titre"=>"Web 3",
                "created_at"=>now(),
            ],
        ]);
    }
}
