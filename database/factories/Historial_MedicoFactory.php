<?php

namespace Database\Factories;

use App\Models\Paciente;
use Facade\Ignition\Support\FakeComposer;
use Illuminate\Database\Eloquent\Factories\Factory;

class Historial_MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'peso'=>$this->faker->randomFloat(1,30, 100),
            'talla'=>$this->faker->randomFloat(1,1, 2),
            'enfermedad'=>$this->faker->randomElement(['Caries',
            'Gingivitis',
           'Periodontitis o piorrea',
           'Halitosis o mal aliento',
            'Llagas y aftas',
            'Herpes labial',
            'Cáncer oral']),
            'cirugia'=> $this->faker->randomElement([
            'Cirugía dental de implantes dentales',
            'Cirugía dental en las encías',
            'Cirugía de injerto de hueso',
            'Cirugía de muelas del juicio',
            'Cirugía de elevación de seno maxilar',
            'Cirugías periapicales']),
            'paciente_id'=>Paciente::inRandomOrder()->first()->id,
        ];
    }
}
