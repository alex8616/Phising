<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credencial extends Model
{
    protected $table = 'credenciales';

    protected $fillable = [
        'usuario', 'clave', 'id_gestion', 'id_periodo', 'periodo'
    ];
}
