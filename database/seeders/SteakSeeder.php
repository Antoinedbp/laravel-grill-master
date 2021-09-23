<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SteakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('steaks')->insert([
            [
                "titre" => "LOVE STEAK?",
                "description" => "Conveniently leverage other's distinctive expertise and backend metrics. Progressively harness intuitive systems and ethical niches. Continually drive extensible benefits vis-a-vis leading-edge meta-services. Conveniently leverage existing market-driven outsourcing vis-a-vis e-business process improvements. Intrinsicly extend quality interfaces with intermandated innovation.",
                "txtBouton" => "BOOK NOW"
            ],
            [
                "titre" => "CREATE MEMORIES",
                "description" => "Conveniently leverage other's distinctive expertise and backend metrics. Progressively harness intuitive systems and ethical niches. Continually drive extensible benefits vis-a-vis leading-edge meta-services. Conveniently leverage existing market-driven outsourcing vis-a-vis e-business process improvements. Intrinsicly extend quality interfaces with intermandated innovation.",
                "txtBouton" => "VIEW MENU"
            ]
        ]);
    }
}
