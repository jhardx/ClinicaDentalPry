<?php

namespace Database\Factories;

use App\Models\Odontologo;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'estado' => $this->faker->randomElement(['en proceso','completado']),
            'odontologo_id'=>Odontologo::inRandomOrder()->first()->id,
        ];
    }
}
