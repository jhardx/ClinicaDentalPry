<?php

namespace Database\Factories;

use App\Models\Comprobante;
use App\Models\Paciente;
use App\Models\Tratamiento;
use Illuminate\Database\Eloquent\Factories\Factory;

class Historial_TratamientoFactory extends Factory
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
            'paciente_id' =>Paciente::inRandomOrder()->first()->id,
            'tratamiento_id' =>Tratamiento::inRandomOrder()->first()->id,
            'comprobante_id' =>Comprobante::inRandomOrder()->first()->id,
        ];
    }
}
