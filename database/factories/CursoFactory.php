<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->unique()->sentence();
        return [


            'nombre' => $nombre,
            'slug' => Str::slug($nombre, '-'),
            'descripcion' => $this->faker->paragraph(),
            'categoria_id' => Categoria::all()->random()->id,
            'estado' => $this->faker->randomElement([0, 1]),

            //
        ];
    }
}
