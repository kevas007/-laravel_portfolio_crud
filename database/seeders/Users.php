<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                // "name" => "admin",
                // "email"=>"admin@admin.com",
                // "email_verified_at"=>"admin@admin.com",
                // "password"=>"12345678"
            ]
        ]);
    }
}
