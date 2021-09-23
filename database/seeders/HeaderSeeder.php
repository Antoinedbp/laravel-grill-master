<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            [
                "logo" => "assets/img/intro-logo.png",
                "img1" => "assets/img/bg/bg1.jpg",
                "img2" => "assets/img/bg/bg2.jpg",
                "img3" => "assets/img/bg/bg3.jpg"
            ]
        ]);
    }
}
