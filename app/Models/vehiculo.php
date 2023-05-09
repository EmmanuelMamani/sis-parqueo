<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    use HasFactory;
    public function perfil(){
        return $this->belongsTo(perfil::class);
    }
    public function entradas(){
        return $this->hasMany(entrada_vehiculo::class,'vehiculo_placa','placa');
    }
}
