<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial_Tratamiento extends Model
{
    use HasFactory;

    public function historial_medico()
    {
        return $this->belongsTo(Historial_Medico::class);
    }

    public function tratamiento()
    {
        return $this->belongsTo(Tratamiento::class);
    }

    public function comprobante()
    {
        return $this->belongsTo(Comprobante::class);
    }

    public function paciente()
    {
        return $this->belongsTo(paciente::class);
    }

}
