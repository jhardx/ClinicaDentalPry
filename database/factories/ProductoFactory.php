<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
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
                'Espejo intraoral.',
                'Sonda de exploración.',
                'Pinza algodonera.',
                '2 espejos dentales intraoral de RODIO, del nº5. con mango macizo (recambiable)',
                'Sonda de endodoncia (DG16 o similar).',
                'Pinza algodonera.',
                'Kit básico de exploración.',
                'Sonda periodontal CP12.',
                'Sonda de Nabers.',
                'Micromotor (conexión Midwest 4).',
                'Contra-ángulo de irrigación interna.',
                'MICROMOTOR NEUMÁTICO para poder conectar el contraángulo en la sala de preclínico.',
                'Pieza de mano recta.',
                'Turbina de irrigación interna (conexión Midwest 4 o Midwest 6).',
            ]),
            'descripcion'=>$this->faker->sentence(7),
            'precio'=>$this->faker->randomFloat(1, 100, 200),
            'proveedor_id' =>Proveedor::inRandomOrder()->first()->id,
        ];
    }
}
