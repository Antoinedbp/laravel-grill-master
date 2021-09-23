<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            [
                "titre" => "A WARM WELCOME",
                "description" => "were very happy to see you.",
            ],
            [
                "titre" => "OUR UPCOMING EVENTS",
                "description" => "try us for yourself today.",
            ],
            [
                "titre" => "BROWSE THE MENU",
                "description" => "your tastebuds will thank you.",
            ],
            [
                "titre" => "OUR ACCLAIMED CHEFS",
                "description" => "dedicated to excellence.",
            ]
        ]);
    }
}
