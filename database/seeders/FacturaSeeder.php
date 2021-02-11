<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Factura=[
            [
                'id_car' => 1,
                'id_pro' => 2 ,
                'id_cli'=>1,
                'formaPago'=>1,
                'Fecha'=>('2020-11-02'),
                 'Total'=>500000 , // 4
            ],
            [
                'id_car' => 2 ,
                'id_pro' => 2 ,
                'id_cli' => 2 ,
                'formaPago' => 2 ,
                'Fecha' =>('2021-11-02'),
                'Total' => 250000 , // 1
             ],

        ];
        DB::table('factura')->insert($Factura);
    }
}
