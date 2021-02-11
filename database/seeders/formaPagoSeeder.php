<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;

class formaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $formaPago=[
            [
                'Descripcion'=>'efectivo',
            ],
            
            [
                'Descripcion'=>'tarjeta',
            ],

        ];
        DB::table('formapago')->insert($formaPago);
    }
}

