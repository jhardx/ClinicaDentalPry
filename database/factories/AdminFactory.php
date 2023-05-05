<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni' => $this->faker->randomDigitNotNull(),
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
            'user_id' =>User::inRandomOrder()->first()->id,
        ];
        
    }
}
