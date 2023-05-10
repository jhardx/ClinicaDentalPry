<?php

namespace Database\Factories;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     * 
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->email(),
            'clave' => $this->faker->password(),
            'rol' => $this->faker->randomElement(['admin', 'paciente', 'odontologo'])
        ];
    }
}
