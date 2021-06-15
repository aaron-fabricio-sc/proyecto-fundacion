<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Profesore;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profesore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->unique()->random()->id,
            'curso_id' => Curso::all()->unique()->random()->id,
            'especialidad' => $this->faker->sentence(),
            'descripcion_especialidad' => $this->faker->paragraph(),
            'estado' => $this->faker->randomElement([1, 0])
        ];
    }
}
