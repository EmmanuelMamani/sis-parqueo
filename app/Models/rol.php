<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    use HasFactory;
    public function usuarios(){
        return $this->belongsToMany(User::class,user_rol::class);
    }
}
