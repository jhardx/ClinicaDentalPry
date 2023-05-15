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
            'fecha_consulta' => $this->faker->date(),
            'hora' => $this->faker->time(),
            'descripcion' => $this->faker->sentence(4),
            'precio' => $this->faker->randomElement(['100', '140', '190']),
            'paciente_id' =>Paciente::inRandomOrder()->first()->id,
            'comprobante_id' =>Comprobante::inRandomOrder()->first()->id,
        ];
    }
}