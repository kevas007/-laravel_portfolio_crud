<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'titre'=>"Contact",
                "description"=>"Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
                "locationTitre"=>"Location:",
                'location'=>"A108 Adam Street, New York, NY 535022",
                "emailTitre"=>"Email:",
                'email'=>"infoo@example.com",
                "phoneTitre"=>"Call:",
                'phone'=>'1 5589 55488 55',
                'map'=>'https://www.google.com/maps?ll=40.710128,-74.006227&z=14&t=m&hl=en-US&gl=BG&mapclient=embed&cid=13302823950184191043',
            ]
        ]);
    }
}
