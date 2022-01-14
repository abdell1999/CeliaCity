<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'type'=>'image'
        ]);

        DB::table("resources")->insert([
            'id'=>'2',
            'title'=>'Verduleria',
            'route'=>'/public/assets/img/resources/verduleria',
            'type'=>'image'
        ]);

        DB::table("resources")->insert([
            'id'=>'3',
            'title'=>'Panaderia',
            'route'=>'/public/assets/img/resources/panaderia',
            'type'=>'image'
        ]);
    }
}
