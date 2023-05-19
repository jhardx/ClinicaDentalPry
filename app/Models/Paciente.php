<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = [
        'dni',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'telefono',
        'tipo_doc',
        'genero',
        'direccion',
        'fecha_naci',
        'estado_civil',
        'fecha_registro',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

    public function historial_medico(): HasOne
    {
        return $this->hasOne(Historial_Medico::class);
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
