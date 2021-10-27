<?php

use Illuminate\Database\Seeder;
use App\Color;

class ColoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'nombre' => 'Blanco'
        ]);
        Color::create([
            'nombre' => 'Negro'
        ]);
        Color::create([
            'nombre' => 'Café'
        ]);
        Color::create([
            'nombre' => 'Otro'
        ]);
    }
}
