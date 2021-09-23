<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                "img" => "assets/img/team/small1.jpg",
                "nom" => "Charles Davies",
                "description" => "Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements."
            ],
            [
                "img" => "assets/img/team/small1.jpg",
                "nom" => "Charles Davies",
                "description" => "Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements."
            ]
        ]);
    }
}
