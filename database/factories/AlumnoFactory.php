<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'correo' => $this->faker->unique()->safeEmail(),
            'fecha_nacimiento' => $this->faker->date(),
            'ciudad' => $this->faker->city(),
        ];
    }
}

