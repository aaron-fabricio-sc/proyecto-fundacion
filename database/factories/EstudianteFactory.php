<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estudiante::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->unique()->random()->id,
            'curso_id' => Curso::all()->random()->id,
            'gestion' => $this->faker->randomElement([2020, 2021, 2022, 2023, 2024, 2025]),
            'semestre' => $this->faker->randomElement([1, 2]),
            'estado' => $this->faker->randomElement([1, 0]),

        ];
    }
}
