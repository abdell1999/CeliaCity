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
        DB::table('pointofviews')->insert([
            'name' => 'IES Celia Viñas',
            'ubication' => 'Centro de Almería',
            'movilphone' => 'Esto es primer comentario',
            'text' => 'Aquí es donde nosotros estudiamos',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
