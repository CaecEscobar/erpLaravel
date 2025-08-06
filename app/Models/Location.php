<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'calle',
        'numero',
        'colonia',
        'municipio',
        'estado',
        'codigo_postal',
        'latitud',
        'longitud',
    ];
}
