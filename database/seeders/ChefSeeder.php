<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chefs')->insert([
            [
                "img" => "assets/img/team/1.jpg",
                "nom" => "John Doe",
                "icon1" => "fa fa-twitter",
                "icon2" => "fa fa-pinterest",
                "icon3" => "fa fa-dribbble",
                "icon4" => "fa fa-facebook",
                "icon5" => "fa fa-behance",
                "icon6" => "fa fa-linkedin",
            ],
            [
                "img" => "assets/img/team/2.jpg",
                "nom" => "Barry Scott",
                "icon1" => "fa fa-twitter",
                "icon2" => "fa fa-pinterest",
                "icon3" => "fa fa-dribbble",
                "icon4" => "fa fa-facebook",
                "icon5" => "fa fa-behance",
                "icon6" => "fa fa-linkedin",
            ],
            [
                "img" => "assets/img/team/3.jpg",
                "nom" => "Tom Smooth",
                "icon1" => "fa fa-twitter",
                "icon2" => "fa fa-pinterest",
                "icon3" => "fa fa-dribbble",
                "icon4" => "fa fa-facebook",
                "icon5" => "fa fa-behance",
                "icon6" => "fa fa-linkedin",
            ],
            [
                "img" => "assets/img/team/4.jpg",
                "nom" => "Harvey Wallace",
                "icon1" => "fa fa-twitter",
                "icon2" => "fa fa-pinterest",
                "icon3" => "fa fa-dribbble",
                "icon4" => "fa fa-facebook",
                "icon5" => "fa fa-behance",
                "icon6" => "fa fa-linkedin",
            ],
        ]);
    }
}
