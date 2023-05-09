<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    use HasFactory;
    public function usuario(){
        return $this->belongsTo(User::class,'user_ci','ci');
    }

    public function vehiculos(){
        return $this->hasMany(vehiculo::class);
    }

    public function pagos(){
        return $this->hasMany(pagos::class);
    }
}
