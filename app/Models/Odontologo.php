<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Odontologo extends Model
{
    protected $fillable = [
        'dni',
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'user_id',
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function agenda(){
        return $this->hasOne('App\Models\Agenda');
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }
}
