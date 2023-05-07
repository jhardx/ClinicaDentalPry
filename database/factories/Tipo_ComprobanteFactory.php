<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Tipo_ComprobanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo_comprobante' => $this->faker->randomElement(['boleta', 'factura']),
        ];
    }
}
