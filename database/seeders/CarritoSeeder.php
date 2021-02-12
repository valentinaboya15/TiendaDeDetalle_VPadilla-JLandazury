<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CarritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Carrito=[
            [
                'id_cli'=>1,
                'id_pro'=>5,
                'Descripcion'=>'Ancheta Sorpresa-madera Amor',
                'cant_prod'=>2,
                'foto'=>'ancheta5.jpeg',
                'id_det'=>1,
            ],

            [
                'id_cli'=>2,
                'id_pro'=>15,
                'Descripcion'=>'Arreglo floral grande con vino ',
                'cant_prod'=>2,
                'foto'=>'flores3.jpeg',
                'id_det'=>11,
            ],
            
            
          

        ];
        DB::table('carrito')->insert($Carrito);
    }
}

