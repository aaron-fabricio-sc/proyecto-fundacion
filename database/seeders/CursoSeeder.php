<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\Estudiante;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursos = Curso::where('estado', 1)->get();
        foreach ($cursos as $curso) {
            $curso->estudiantes()->attach(Estudiante::all()->random());
        }
    }
}
