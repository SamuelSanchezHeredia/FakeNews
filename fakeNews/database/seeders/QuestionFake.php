<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionFake extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 200; $i++) {
            
    
            
            $numSubcategoria= rand(0,count($subCategorias[$categoria])-1);
            
            DB::table('producto')->insert([
                'nombre' => $faker->word,
                'marca' => $marcasRepuestos[$numMarca],
                'precio' => $faker->randomFloat(2, 0, 1000),
                'compatibilidad' => $faker->word,
                'categoria' => $categoria,
                'subcategoria' => $subCategorias[$categoria][$numSubcategoria],
                'rutaimg' => '1708857567.jpg',
                'descripcion' => $faker->paragraph,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
