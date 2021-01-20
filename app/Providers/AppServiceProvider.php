<?php

namespace App\Providers;

use App\src\Propuesta\Domain\Repository\PropuestaRepository;
use App\src\Propuesta\Infrastructure\EloquentRepository\PropuestaEloquentRepository;
use Illuminate\Support\ServiceProvider;
use Medine\Gibmyx\Domain\Repository\PeliculasRepository;
use Medine\Gibmyx\Infrastructure\Repository\PeliculaEloquentRepository;

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
        //here
        //----------------------------------------------------------

        //----------------------Francisco---------------------------
        //here
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
        //here
        //----------------------------------------------------------
    }
}
