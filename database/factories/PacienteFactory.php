<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni' => $this->faker->numerify(),
            'nombre' => $this->faker->name(),
            'apellido_paterno' => $this->faker->lastName(),
            'apellido_materno' => $this->faker->lastName(),
            'telefono' => $this->faker->phoneNumber(),
            'tipo_doc' => $this->faker->randomElement(['carnet', 'dni']),
            'genero' => $this->faker->randomElement(['M', 'F']),
            'direccion' => $this->faker->address(),
            'fecha_naci' => $this->faker->date(),
            'estado_civil' => $this->faker->randomElement(['soltero', 'casado']),
            'fecha_registro' => $this->faker->date(),
            'user_id' =>User::inRandomOrder()->first()->id,
        ];
    }
}
