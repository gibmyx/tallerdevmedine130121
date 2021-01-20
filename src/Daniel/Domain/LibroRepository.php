<?php

declare(strict_types=1);


namespace Medine\Daniel\Domain;


interface LibroRepository
{
    public  function save(Libro $libro);
}
