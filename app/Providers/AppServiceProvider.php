<?php

namespace App\Providers;

use App\src\Propuesta\Domain\Repository\PropuestaRepository;
use App\src\Propuesta\Infrastructure\EloquentRepository\PropuestaEloquentRepository;
use Illuminate\Support\ServiceProvider;
use Medine\Daniel\Application\Create\LibroCreator;
use Medine\Daniel\Domain\LibroRepository;
use Medine\Daniel\Infrastructure\InMemoryLibroRepository;
use Medine\Daniel\Infrastructure\MySqlLibroRepository;
use Medine\Gibmyx\Domain\Repository\PeliculasRepository;
use Medine\Gibmyx\Infrastructure\Repository\PeliculaEloquentRepository;
use Medine\Jose\Pharmacy\Domain\InMemoryMedicineRepository;
use Medine\Jose\Pharmacy\Domain\MedicineRepository;
use Taller\Cars\Domain\CarRepository;
use Taller\Cars\Domain\InMemoryCarRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Taller\Propuesta\Domain\PropuestaRepository::class,
            \Taller\Propuesta\Infrastructure\PropuestaEloquentRepository::class
        );

        $this->app->bind(
            PropuestaRepository::class,
            PropuestaEloquentRepository::class
        );

        //----------------------Christian---------------------------
        //here
        //----------------------------------------------------------

        //----------------------Daniel------------------------------
        $this->app->bind(
            LibroRepository::class,
            MySqlLibroRepository::class
        );
        //----------------------------------------------------------

        //----------------------Francisco---------------------------
        $this->app->bind(
            CarRepository::class,
            InMemoryCarRepository::class
        );
        //----------------------------------------------------------

        //----------------------Gabriel-----------------------------
        //here
        //----------------------------------------------------------

        //----------------------Gibmyx------------------------------
        $this->app->bind(
            PeliculasRepository::class,
            PeliculaEloquentRepository::class
        );
        //----------------------------------------------------------

        //----------------------Jose--------------------------------
        $this->app->bind(
            MedicineRepository::class,
            InMemoryMedicineRepository::class
        );
        //----------------------------------------------------------
    }
}
