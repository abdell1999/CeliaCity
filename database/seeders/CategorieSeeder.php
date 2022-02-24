<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'monumentos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'hostelería',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'comercios',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
