<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Cliente=[
            [
                'id_usu'=>1,
                'cedula'=>'1234560712',
                'nombre'=>'Miguel',
                'apellido'=>'Perez',
                'genero'=>'M',
                'domicilio'=>'Tumaco',
                'celular'=>'00000001',
                'email'=>'miguelperez@gmail.com',
                'foto'=>'hombre1.jpg',
            ],
            [
                'id_usu'=>1,
                'cedula'=>'2314545098',
                'nombre'=>'Salomon',
                'apellido'=>'Benitez',
                'genero'=>'M',
                'domicilio'=>'Pasto',
                'celular'=>'12341238',
                'email'=>'salomonbenitez@gmail.com',
                'foto'=>'hombre2.jpg',
            ],
            [
                'id_usu'=>1,
                'cedula'=>'1231234650',
                'nombre'=>'Veronica',
                'apellido'=>'Cruz',
                'genero'=>'F',
                'domicilio'=>'Buenos aires',
                'celular'=>'32345654',
                'email'=>'veronicacruz@gmail.com',
                'foto'=>'mujer1.jpg',
            ],
            [
                'id_usu'=>1,
                'cedula'=>'1098786923',
                'nombre'=>'Maria',
                'apellido'=>'Estupiñan',
                'genero'=>'F',
                'domicilio'=>'bella vista',
                'celular'=>'31523154',
                'email'=>'mariaestupiñan@gmail.com',
                'foto'=>'mujer2.jpg',
            ],
            [
                'id_usu'=>1,
                'cedula'=>'1087908678',
                'nombre'=>'Emily',
                'apellido'=>'Valverde',
                'genero'=>'F',
                'domicilio'=>'Llorente',
                'celular'=>'31243509',
                'email'=>'emilyvalverde@gmail.com',
                'foto'=>'mujer3.jpg',
            ],

            ];
            DB::table('cliente')->insert($Cliente);
    }
}
