<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = "libros";
    protected $fillable = [
        'uuid',
        'nombre',
        'autor',
        'edicion',
        'editorial',
        'fecha_publicacion'
    ];

}
