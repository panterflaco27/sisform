<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class egresado extends Model
{
    use HasFactory;
    protected $fillabel = [
        'nombre',
        'appat',
        'apmat',
        'curp',
        'nocontrol',
        'fechanac',
        'sexo',
        'estadoc',
        'calle',
        'numero',
        'colonia',
        'codigopostal',
        'ciudad',
        'municipio',
        'estado',
        'telefono',
        'telcasa',
        'email',
        'carrera',
        'especialidad',
        'mesanioegreso',
        'titulo',
        'dominioidioma',
        'otroidioma',
        'paquetescomp'
    ];
}
