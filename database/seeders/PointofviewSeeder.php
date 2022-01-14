<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PointofviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pointofinterests')->insert([
            'id' => '1',
            'name' => 'IES Celia Viñas',
            'latitude' => '37.330822]',
            'longitude' => '-2.302065',
            'movilephone' => '123 456 789',
            'text' => 'Aquí es donde nosotros estudiamos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pointofinterests')->insert([
            'id' => '2',
            'name' => 'Verduleria',
            'latitude' => '37.330822]',
            'longitude' => '-2.302065',
            'movilephone' => '123 456 789',
            'text' => 'Verduleria de Prueba',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
