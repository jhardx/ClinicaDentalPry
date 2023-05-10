<?php

namespace Database\Factories;

use App\Models\Agenda;
use App\Models\Paciente;
use App\Models\Tratamiento;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'estado_cita' => $this->faker->randomElement(['pendiente','asistio cita']),
            'descripcion' =>$this->faker->sentence(5),
            'fecha' =>$this->faker->date(),
            'hora' =>$this->faker->time(),
            'paciente_id'=>Paciente::inRandomOrder()->first()->id,
            'agenda_id'=>Agenda::inRandomOrder()->first()->id,
            'tratamiento_id'=>Tratamiento::inRandomOrder()->first()->id,
        ];
    }
}
