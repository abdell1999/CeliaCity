<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Pointofinterest_ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("pointofinterest_resources")->insert([
            'id' => '1',
            'id_resource' => '1',
            'id_pointofinterest' => '1'
        ]);

        DB::table("pointofinterest_resources")->insert([
            'id' => '2',
            'id_resource' => '2',
            'id_pointofinterest' => '2'
        ]);
    }
}
