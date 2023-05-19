<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'costo',
    ];

    public function historial_tratamientos()
    {
        return $this->hasMany(Historial_Tratamiento::class);
    }

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

}
