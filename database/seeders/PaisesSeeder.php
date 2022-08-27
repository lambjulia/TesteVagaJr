<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PaisesSeeder extends Seeder
{
    public function run()
    {
        DB::table('paises')->insert(
            [
                [
                    'id' => '1',
                    'nome_pais'=> 'Brasil',
                ],
                [
                    'id' => '2',
                    'nome_pais'=> 'Estados Unidos',
                ],
                [
                    'id' => '3',
                    'nome_pais'=> 'Canadá',
                ],
                [
                    'id' => '4',
                    'nome_pais'=> 'Argentina',
                ],
            ]
        );
    }
}
