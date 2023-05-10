<?php

namespace Database\Factories;
use \Illuminate\Database\Eloquent\Factories\Factory;


// use Faker\Generator as Faker;
use Faker\Provider\es_PE\Person as Faker;

use App\Models\User;

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
            'dni' => $this->faker->numerify(),
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
            'user_id' =>User::inRandomOrder()->first()->id,
        ];
    }
}