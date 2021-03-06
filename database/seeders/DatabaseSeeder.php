<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        $this->call(UserSeeder::class);
        $this->call(PointofviewSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(OptionsSeeder::class);
        //$this->call(MacaelSeeder::class);
        //$this->call(MacaelResourceSeeder::class);
    }
}
