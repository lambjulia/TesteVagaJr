<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    public function run()
    {
        DB::table('estados')->insert(
            [
                [
                    'id' => '1',
                    'nome_estado'=> 'Rio Grande do Sul',
                    'id_pais'=> '1'
                ],
                [
                    'id' => '2',
                    'nome_estado'=> 'Santa Catarina',
                    'id_pais'=> '1'
                ],
                [
                    'id' => '3',
                    'nome_estado'=> 'Paraná',
                    'id_pais'=> '1'
                ],
                [
                    'id' => '4',
                    'nome_estado'=> 'Texas',
                    'id_pais'=> '2'
                ],
                [
                    'id' => '5',
                    'nome_estado'=> 'Flórida',
                    'id_pais'=> '2'
                ],
                [
                    'id' => '6',
                    'nome_estado'=> 'Califórnia',
                    'id_pais'=> '2'
                ],
                [
                    'id' => '7',
                    'nome_estado'=> 'Ontário',
                    'id_pais'=> '3'
                ],
                [
                    'id' => '8',
                    'nome_estado'=> 'Quebec',
                    'id_pais'=> '3'
                ],
                [
                    'id' => '9',
                    'nome_estado'=> 'Manitoba',
                    'id_pais'=> '3'
                ],
                [
                    'id' => '10',
                    'nome_estado'=> 'Córdova',
                    'id_pais'=> '4'
                ],
                [
                    'id' => '11',
                    'nome_estado'=> 'Chaco',
                    'id_pais'=> '4'
                ],
                [
                    'id' => '12',
                    'nome_estado'=> 'San Luis',
                    'id_pais'=> '4'
                ],
               
            ]
        );
    }
}
