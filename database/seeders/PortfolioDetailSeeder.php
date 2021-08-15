<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_details')->insert([
            [
                'titre'=>'Portfoio Details',
                'home'=>'<a href="index.html">Home</a>',
                'details'=>'Portfoio Details',
                'image1'=>"portfolio-details-1.jpg",
                'image2'=>"portfolio-details-2.jpg",
                'image3'=>"portfolio-details-3.jpg",
                'titre2'=>'Project information',
                'category'=>"<strong>Category</strong>: Web design",
                "client"=>"<strong>Client</strong>: ASU Company",
                "projetDate"=>"<strong>Project date</strong>: 01 March, 2020",
                "projetUrl"=>'<strong>Project URL</strong>: <a href="#">www.example.com</a>',
                "titre3"=>"This is an example of portfolio detail",
                "para"=>"Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius."
            ]
        ]);
    }
}
