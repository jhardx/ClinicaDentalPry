<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        \App\Models\User::factory(50)->create();
        \App\Models\Admin::factory(1)->create();
        \App\Models\Odontologo::factory(9)->create();
        \App\Models\Paciente::factory(40)->create();
        \App\Models\Tratamiento::factory(10)->create();
        \App\Models\Agenda::factory(9)->create();
        \App\Models\Cita::factory(40)->create();
        \App\Models\Tipo_Comprobante::factory(2)->create();
        \App\Models\Proveedor::factory(10)->create();
        \App\Models\Producto::factory(100)->create();
        \App\Models\Comprobante::factory(100)->create();
        \App\Models\Historial_Tratamiento::factory(40)->create();
        \App\Models\Consulta::factory(10)->create();
        \App\Models\Historial_Medico::factory(40)->create();
      
      
    
       
       
       
        
    }
}
