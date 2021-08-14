<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            [
                "titre"=>"Facts",
                "titrePara"=>"Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
                "happy" => 232,
                "paraHappy"=>"<strong>Happy Clients</strong> consequuntur quae",
                "project" => 521,
                "paraProjet"=>"<strong>Projects</strong> adipisci atque cum quia aut",
                "support" => 1463,
                "paraSupp"=>"<strong>Hours Of Support</strong> aut commodi quaerat",
                "work" => 15,
                "paraWork"=>"<strong>Hard Workers</strong> rerum asperiores dolor",
                "created_at" =>now(),
            ],
        ]);
    }
}
