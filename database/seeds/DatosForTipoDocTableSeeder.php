<?php

use Illuminate\Database\Seeder;

class DatosForTipoDocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Programa
        DB::table('tipo_docs')->insert([
        	//entrante
        		['nombre' => 'FUT','descripcion' => '','estado' => '1',]
        	//salientes
                ['nombre' => 'Oficio','descripcion' => '','estado' => '1',],
                ['nombre' => 'Oficio Multiple','descripcion' => '','estado' => '1',],
                ['nombre' => 'Proveido','descripcion' => '','estado' => '1',],
                ['nombre' => 'Resolucion','descripcion' => '','estado' => '1',],
                ['nombre' => 'Carta','descripcion' => '','estado' => '1',],
                ['nombre' => 'Memorandum','descripcion' => '','estado' => '1',]
        ]);
    }
}
