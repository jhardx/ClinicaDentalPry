<?php

namespace Database\Factories;

use App\Models\Tipo_Comprobante;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComprobanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha' => $this->faker->date(),
            'total' => $this->faker->randomElement(['400', '500', '600']),
            'tipo_comprobante_id' =>Tipo_Comprobante::inRandomOrder()->first()->id,
        ];
    }
}
