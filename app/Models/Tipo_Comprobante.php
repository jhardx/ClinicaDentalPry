<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Comprobante extends Model
{
    use HasFactory;

    public function comprobantes()
    {
        return $this->hasMany(Comprobante::class);
    }
}
