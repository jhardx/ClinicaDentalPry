<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    public function odontologo()
    {
        return $this->belongsTo('App\Models\Odontologo');
    }

    //relacion uno a muchos

    public function citas(){
        return $this->hasMany('App\Models\Cita');
    }
}
