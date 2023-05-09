<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\rol;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function asignaciones(){
        return $this->hasMany(asignacion_horario::class,'user_ci','ci');
    }
    public function roles(){
        return $this->belongsToMany(rol::class,user_rol::class);
    }

    public function perfil(){
        return $this->hasOne(perfil::class,'user_ci','ci');
    }
    public function rol(){
        return $this->belongsTo(rol::class);
    }
}
