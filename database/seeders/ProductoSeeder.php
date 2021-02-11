<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Producto=[
            
                [
                    'id_cate'=>1,
                    'id_cata'=>1,
                    'Descripcion'=>'Ancheta Sorpresa de Cervezas',
                    'cant_prod'=>13,
                    'foto'=>'ancheta1.jpeg',
                    'id_det'=>1,
                    
                ],
    
                [
                    'id_cate'=>1,
                    'id_cata'=>1,
                    'Descripcion'=>'Ancheta Sorpresa Dulces',
                    'cant_prod'=>14,
                    'foto'=>'ancheta2.jpeg',
                    'id_det'=>1,
                   
                ],
    
                [
                    'id_cate'=>1,
                    'id_cata'=>1,
                    'Descripcion'=>'Copa Sorpresa Dulces',
                    'cant_prod'=>15,
                    'foto'=>'ancheta3.jpeg',
                    'id_det'=>5,
                    
                ],
    
                [
                    'id_cate'=>1,
                    'id_cata'=>1,
                    'Descripcion'=>'Ancheta Sorpres amor',
                    'cant_prod'=>16,
                    'foto'=>'ancheta4.jpeg',
                    'id_det'=>4,
                   
                ],

                [
                    'id_cate'=>1,
                    'id_cata'=>1,
                    'Descripcion'=>'Ancheta Sorpresa-madera Amor',
                    'cant_prod'=>8,
                    'foto'=>'ancheta5.jpeg',
                    'id_det'=>1,
                    
                ],

                [
                    'id_cate'=>1,
                    'id_cata'=>1,
                    'Descripcion'=>'Ancheta sorpresa-pelcuhe ',
                    'cant_prod'=>10,
                    'foto'=>'ancheta6.jpeg',
                    'id_det'=>3,
                    
                ],

                [
                    'id_cate'=>2,
                    'id_cata'=>1,
                    'Descripcion'=>'Desayuno sorpresa  Mediano:pechuga,1 lacteo, milo,cerveza, ensalada de fruts, dulces, frutas  ',
                    'cant_prod'=>9,
                    'foto'=>'desayuno1.jpeg',
                    'id_det'=>7,
                    
                ],

                [
                    'id_cate'=>2,
                    'id_cata'=>1,
                    'Descripcion'=>'Desayuno sorpresa grande:pechuga,1 lacteo, milo,cerveza, ensalada de fruts, dulces, frutas ',
                    'cant_prod'=>10,
                    'id_det'=>8,
                    'foto'=>'desayuno2.jpeg',
                ],

                [
                    'id_cate'=>2,
                    'id_cata'=>1,
                    'Descripcion'=>'Desayuno sorpresa grande:pechuga,1 lacteo, milo,cerveza, ensalada de fruts, dulces, frutas ',
                    'cant_prod'=>20,
                    'foto'=>'desayuno3.jpeg',
                    'id_det'=>8,
                    
                ],

                [
                    'id_cate'=>2,
                    'id_cata'=>1,
                    'Descripcion'=>'Desayuno sorpresa Carton: Huevo/sandwich, jugo nectar, fruta, ensalada, dulces,lacteo ',
                    'cant_prod'=>12,
                    'foto'=>'desayuno4.jpeg',
                    'id_det'=>6,
                    
                ],

                [
                    'id_cate'=>2,
                    'id_cata'=>1,
                    'Descripcion'=>'Desayuno sorpresa Carton: Huevo/sandwich, jugo nectar, fruta, ensalada, dulces,lacteo',
                    'cant_prod'=>11,
                    'foto'=>'desayuno5.jpeg',
                    'id_det'=>6,
                    
                ],

                [
                    'id_cate'=>2,
                    'id_cata'=>1,
                    'Descripcion'=>'Desayuno sorpresaCarton: Huevo/sandwich, jugo nectar, fruta, ensalada, dulces,lacteo ',
                    'cant_prod'=>8,
                    'foto'=>'desayuno6.jpeg',
                    'id_det'=>6,
                    
                ],
    
                [
                    'id_cate'=>3,
                    'id_cata'=>1,
                    'Descripcion'=>'Arreglo floral con chocolates internos ',
                    'cant_prod'=>10,
                    'id_det'=>9,
                    'foto'=>'flores1.jpeg',
                ],

                [
                    'id_cate'=>3,
                    'id_cata'=>1,
                    'Descripcion'=>'Arreglo floral grande ',
                    'cant_prod'=>6,
                    'foto'=>'flores2.jpeg',
                    'id_det'=>10,
                   
                ],

                [
                    'id_cate'=>3,
                    'id_cata'=>1,
                    'Descripcion'=>'Arreglo floral grande con vino ',
                    'cant_prod'=>8,
                    'foto'=>'flores3.jpeg',
                    'id_det'=>11,
                    
                ],

                [
                    'id_cate'=>3,
                    'id_cata'=>1,
                    'Descripcion'=>'Arreglo floral grande con peluche',
                    'cant_prod'=>7,
                    'foto'=>'flores4.jpeg',
                    'id_det'=>12,
                    
                ],

                [
                    'id_cate'=>3,
                    'id_cata'=>1,
                    'Descripcion'=>'Arreglo floral mediano ',
                    'cant_prod'=>9,
                    'foto'=>'flores5.jpeg',
                    'id_det'=>13,
                    
                ],

                [
                    'id_cate'=>3,
                    'id_cata'=>1,
                    'Descripcion'=>'Ramo floral con peluche y dulces',
                    'cant_prod'=>5,
                    'foto'=>'flores6.jpeg',
                    'id_det'=>14,
                   
                ],

                [
                    'id_cate'=>4,
                    'id_cata'=>1,
                    'Descripcion'=>'Arreglo frutal grande con peluche',
                    'cant_prod'=>8,
                    'foto'=>'frutal1.jpeg',
                    'id_det'=>15,
                    
                ],

                [
                    'id_cate'=>4,
                    'id_cata'=>1,
                    'Descripcion'=>'Arreglo frutal madera-mediano y globos en helio',
                    'cant_prod'=>5,
                    'foto'=>'frutal2.jpeg',
                    'id_det'=>16,
                    
                ],

                [
                    'id_cate'=>4,
                    'id_cata'=>1,
                    'Descripcion'=>'Arreglo frutal caja de carton',
                    'cant_prod'=>3,
                    'foto'=>'frutal3.jpeg',
                    'id_det'=>17,
                    
                ],

                [
                    'id_cate'=>4,
                    'id_cata'=>1,
                    'Descripcion'=>'Arreglo frutal con lacteos',
                    'cant_prod'=>7,
                    'foto'=>'frutal4.jpeg',
                    'id_det'=>18,
                    
                ],

                [
                    'id_cate'=>4,
                    'id_cata'=>1,
                    'Descripcion'=>'Arreglo frutal caja de carton',
                    'cant_prod'=>4,
                    'foto'=>'frutal5.jpeg',
                    'id_det'=>17,
                    
                ],

                
        ];
        DB::table('producto')->insert($Producto);
    }
}
