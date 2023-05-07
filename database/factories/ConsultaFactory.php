<?php

namespace Database\Factories;

use App\Models\Comprobante;
use App\Models\Odontologo;
use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultaFactory extends Factory
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
            'hora' => $this->faker->time(),
            'duracion' => $this->faker->numerify(),
            'precio' => $this->faker->randomElement(['100', '140', '190']),
            'id_odontologo' =>Odontologo::inRandomOrder()->first()->id,
            'id_paciente' =>Paciente::inRandomOrder()->first()->id,
            'id_comprobante' =>Comprobante::inRandomOrder()->first()->id,
        ];
    }
}
