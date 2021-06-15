<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estudiantes = Estudiante::all();
        foreach ($estudiantes as $estudiante) {

            $estudiante->cursos()->attach(rand(1, 20));
        }
    }
}
