<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genero;
use Illuminate\Support\Str;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $masculino = "Masculino";
        $femenino = "Femenino";

        $genero1 = new Genero();
        $genero1->genero = $masculino;
        $genero1->slug = Str::slug($masculino, '-');

        $genero1->save();

        $genero2 = new Genero();
        $genero2->genero = $femenino;
        $genero2->slug = Str::slug($femenino, '-');

        $genero2->save();
    }
}
