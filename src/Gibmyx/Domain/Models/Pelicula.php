<?php

namespace Medine\Gibmyx\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = "peliculas";
    protected $fillable = [
        "id",
        "titulo",
        "genero",
        "duracion",
        "director",
        "estreno",
    ];
}
