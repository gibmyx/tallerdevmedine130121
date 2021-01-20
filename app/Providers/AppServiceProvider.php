<?php

namespace App\Providers;

use App\src\Propuesta\Domain\Repository\PropuestaRepository;
use App\src\Propuesta\Infrastructure\EloquentRepository\PropuestaEloquentRepository;
use Illuminate\Support\ServiceProvider;
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
        //here
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
        //here
        //----------------------------------------------------------

        //----------------------Jose--------------------------------
        //here
        //----------------------------------------------------------
    }
}
