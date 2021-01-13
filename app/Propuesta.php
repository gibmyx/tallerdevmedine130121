<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    const PENDIENTE = "pendiente";
    const ACEPTADO = "aceptado";
    const DENEGADO = "denegado";

    protected $table = "propuestas";
    protected $fillable = [

    ];
}
