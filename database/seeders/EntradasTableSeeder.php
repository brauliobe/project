<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entrada;

class EntradasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        Entrada::create([
           'user_id' => 1,
           'titulo' => 'Primer Titulo',
           'imagen' => 'imagen1.png',
           'tag' => 'Etiqueta1',
           'contenido' => 'Este es el contenido del primer registro',
        ]);

        Entrada::create([
            'user_id' => 1,
            'titulo' => 'Segundo Titulo',
            'imagen' => 'imagen2.png',
            'tag' => 'Etiqueta2',
            'contenido' => 'Este es el contenido del segundo registro',
         ]);
         */

         Entrada::factory()->count(100)->create();
         
    }
}
