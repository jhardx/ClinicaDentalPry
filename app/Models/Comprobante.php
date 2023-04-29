<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;

    public function tipo_comprobante()
    {
        return $this->belongsTo(Tipo_Comprobante::class);
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }

    public function historial_tratamientos()
    {
        return $this->hasMany(Historial_Tratamiento::class);
    }
}
