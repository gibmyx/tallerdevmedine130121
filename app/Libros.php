<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    protected $table = "libros";
    protected $fillable = [
        'nombre',
        'autor',
        'edicion',
        'editorial',
        'fecha_publicacion'
    ];
}
