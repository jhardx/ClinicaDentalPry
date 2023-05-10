<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TratamientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->randomElement(['Tratamiento preventivo (Flúor, sellantes, etc.)',
            'Tratamiento de operatoria dental: Ionómeros, amalgamas y resinas compuestas',
            'Tratamiento pulpar de piezas primarias (pulpotomías, pulpectomías)',
            'Tratamiento de caries rampante']),
            'descripcion'=>$this->faker->sentence(7),
            'costo' =>$this->faker->numberBetween(50,60),
        ];
    }
}
