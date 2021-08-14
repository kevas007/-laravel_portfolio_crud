<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            "titreAbout"=>"About",
            "para"=>" Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
            "nom" => "Smith",
            "prenom" => "Alex",
            "titre" => "UI/UX Designer & Web Developer",
            "paragra"=>"  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.",
            "img" =>"profile-img.jpg",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "birthday" => "<strong>Birthday:</strong> 1 May 1995",
            "website" => "<strong>Website:</strong> www.example.com",
            "phone" => "<strong>Phone:</strong> +123 456 7890",
            "city" => " <strong>City:</strong> City : New York, USA",
            "age" => " <strong>Age:</strong> 30",
            "degree" => " <strong>Degree:</strong> Master",
            "email" => " <strong>PhEmailone:</strong>
            email@example.com",
            "freelance" => "<strong>Freelance:</strong> Available",
            "paragraphe" =>"Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.",
            "created_at" => now(),
    ]);
    }
}
