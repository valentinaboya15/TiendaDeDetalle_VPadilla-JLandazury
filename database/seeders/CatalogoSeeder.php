<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Catalogo=[
            [
                'nombre'=>'catalogo 1',
            ],
            
          

        ];
        DB::table('catalogo')->insert($Catalogo);
    }
}

