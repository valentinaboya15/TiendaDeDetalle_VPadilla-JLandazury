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
            ],

            [
                'id_cli'=>2,
                'id_pro'=>15,
            ],
            
            
          

        ];
        DB::table('carrito')->insert($Carrito);
    }
}

