<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            TitreSeeder::class,
            HeaderSeeder::class,
            AboutSeeder::class,
            SteakSeeder::class,
            ChefSeeder::class,
            CustomerSeeder::class,
            RoleSeeder::class,
        ]);

        DB::table('users')->insert([
            "name" => "Antoine",
            "email" => "antoinedebassompierre@hotmail.com",
            "password" => Hash::make('testtest'),
            "role_id" => 1,
            "created_at" => now()
        ]);
    }
}
