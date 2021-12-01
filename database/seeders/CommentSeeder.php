<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'date' => '2021/12/21',
            'valoration' => '10',
            'text' => 'Esto es primer comentario',
            'idUser' => '1',
            'idPoint' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('comments')->insert([
            'date' => '2021/12/21',
            'valoration' => '5',
            'text' => 'Este es el segundo',
            'idUser' => '1',
            'idPoint' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
