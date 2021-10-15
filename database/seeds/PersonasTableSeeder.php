<?php

use Illuminate\Database\Seeder;
use App\Persona;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            'cedula'   =>  '12345678',
            'nombre'   =>  'Pepito',
            'apellido' =>  'Perez',
            'direccion' => 'Cra 677 # 9-65',
            'telefono'  => '31099999999'
        ]);

        Persona::create([
            'cedula'   =>  '987654321',
            'nombre'   =>  'Maria',
            'apellido' =>  'Martinez',
            'direccion' => 'Cra 623 # 9-65',
            'telefono'  => '3101111111'
        ]);
    }
}
