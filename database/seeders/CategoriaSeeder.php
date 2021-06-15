<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use App\Models\Categoria;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comida = "Comida";
        $textiles = "Textiles";
        $servicios = "Servicios";


        $categoria1 = new Categoria();
        $categoria1->nombre = $comida;
        $categoria1->slug = Str::slug($comida, '-');

        $categoria1->save();

        $categoria2 = new Categoria();
        $categoria2->nombre = $textiles;
        $categoria2->slug = Str::slug($textiles, '-');

        $categoria2->save();

        $categoria3 = new Categoria();
        $categoria3->nombre = $servicios;
        $categoria3->slug = Str::slug($servicios, '-');



        $categoria3->save();
    }
}
