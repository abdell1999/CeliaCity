<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("resources")->insert([
            'id'=>'1',
            'title'=>'Supermercado',
            'route'=>'/public/assets/img/resources/supermercado',
            'type'=>'image',
            'created_at' => now(),
            'updated_at' => now()

        ]);

        DB::table("resources")->insert([
            'id'=>'2',
            'title'=>'Verduleria',
            'route'=>'/public/assets/img/resources/verduleria',
            'type'=>'image',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table("resources")->insert([
            'id'=>'3',
            'title'=>'Panaderia',
            'route'=>'/public/assets/img/resources/panaderia',
            'type'=>'image',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
