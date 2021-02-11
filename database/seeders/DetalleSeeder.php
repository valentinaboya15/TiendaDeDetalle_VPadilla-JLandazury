<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Detalles=[
        //1  
        [
            'Tipo'=>'Ancheta Madera',
            'Precio'=>75000,
        ],
//2
        [
            'Tipo'=>'Ancheta copa',
            'Precio'=>35000,
        ],
//3
        [
            'Tipo'=>'Caja carton Peluche',
            'Precio'=>55000,
        ],
//4
        [
            'Tipo'=>'Caja carton dulces',
            'Precio'=>35000,
        ],
//5
        [
            'Tipo'=>'copa sorpresa',
            'Precio'=>35000,
        ],
//6
        [
            'Tipo'=>'desayuno sorpresa-Carton',
            'Precio'=>35000,
        ],   
    //7    
        [
            'Tipo'=>'Desayuno sorpresa-madera mediano',
            'Precio'=>85000,
        ],   
//8
        [
            'Tipo'=>'Desayuno sorpresa-madera grande',
            'Precio'=>130000,
        ],   
//9
        [
            'Tipo'=>'arreglo floral con chocolates',
            'Precio'=>95000,
        ], 
//10
        [
            'Tipo'=>'arreglo floral grande ',
            'Precio'=>120000,
        ], 
//11
        [
            'Tipo'=>'arreglo floral-vino',
            'Precio'=>160000,
        ], 
//12
        [
            'Tipo'=>'arreglo floral peluche',
            'Precio'=>160000,
        ], 
//13
        [
            'Tipo'=>'arreglo floral mediano',
            'Precio'=>85000,
        ], 
//14
        [
            'Tipo'=>'ramo de flores',
            'Precio'=>65000,
        ], 
//15
        [
            'Tipo'=>'Arreglo frutal-peluche',
            'Precio'=>130000,
        ], 
//16
        [
            'Tipo'=>'Arreglo frutal 1',
            'Precio'=>75000,
        ], 
//17
        [
            'Tipo'=>'Arreglo frutal carton',
            'Precio'=>45000,
        ], 
//18
        [
            'Tipo'=>'Arreglo frutal madera',
            'Precio'=>80000,
        ], 
        ];
        DB::table('detalle')->insert($Detalles);
    }
}
