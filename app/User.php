<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'nombres',
            'apellido_paterno',
            'apellido_materno',
            'f_nac',
            'email',
            'dni',
            'password',
            'foto',
            //Domicilio
            'domicilio',
            'n_domicilio',
            //Contacto
            'tel',
            'cel',
            //Otros
            'sexo',
            //rol
            'rol', 
            'estado_log',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
