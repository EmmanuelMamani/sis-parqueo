<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrada_vehiculo extends Model
{
    use HasFactory;
    public function vehiculo(){
        return $this->belongsTo(vehiculo::class,'vehiculo_placa','placa');
    }
    public function parqueo(){
        return $this->belongsTo(parqueo::class,'nro_plaza','nro_parqueo');
    }
}
