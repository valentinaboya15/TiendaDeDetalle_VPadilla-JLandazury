<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Categoria =[
            [
                'id_cata'=>1,
                'nombre'=>'anchetas',
                'foto'=>'ancheta1.jpeg',
            ],

            [
                'id_cata'=>1,
                'nombre'=>'Desayunos',
                'foto'=>'desayuno1.jpeg',
            ],

            [
                'id_cata'=>1,
                'nombre'=>'Flores',
                'foto'=>'flores1.jpeg',
            ],

            [
                'id_cata'=>1,
                'nombre'=>'Frutales',
                'foto'=>'frutal1.jpeg',
            ],

        ];

        DB::table('categoria')->insert($Categoria);
    }
}

