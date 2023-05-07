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
        \App\Models\Paciente::factory(40)->create();
        \App\Models\Odontologo::factory(9)->create();
        // \App\Models\Tipo_Comprobante::factory(2)->create();
        // \App\Models\Comprobante::factory(100)->create();
        // \App\Models\Consulta::factory(100)->create();
      
       
       
       
        
    }
}
