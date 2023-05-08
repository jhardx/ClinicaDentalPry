<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cita extends Model
{
    use HasFactory;

    
    // relacion uno a muchos(inverso)
    public function agenda(){
        return $this->belongsTo('App\Models\Agenda');
    }

    // relacion uno a muchos(inverso)
    public function paciente(): BelongsTo
    {
        return $this->belongsTo(Paciente::class);
    }

     // relacion uno a muchos(inverso)
     public function tratamiento(): BelongsTo
     {
         return $this->belongsTo(Tratamiento::class);
     }
}
