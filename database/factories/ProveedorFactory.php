<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->randomElement([
                'DM-CEOSA--ORTOCEOSA',
                'VOCO',
                '3SHAPE',
                'A-DEC',
                'ABADEN-DENTISTAS',
                'ACTEON-IBERICA',
                'ANCLADEN',
                'ANTHOS',
                'ARCHIMEDES'
            ]),
            'direccion'=>$this->faker->address(),
            'contacto'=>$this->faker->phoneNumber(),
        ];
    }
}
