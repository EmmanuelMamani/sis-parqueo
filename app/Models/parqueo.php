<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parqueo extends Model
{
    use HasFactory;
    public function entradas(){
        return $this->hasMany(entrada_vehiculo::class,'nro_plaza','nro_parqueo');
    }
}
