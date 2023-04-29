<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    public function odontologo()
    {
        return $this->belongsTo(Odontologo::class);
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function comprobante()
    {
        return $this->belongsTo(Comprobante::class);
    }
}
