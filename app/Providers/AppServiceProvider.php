<?php

namespace App\Providers;

use App\src\Propuesta\Domain\Repository\PropuestaRepository;
use App\src\Propuesta\Infrastructure\EloquentRepository\PropuestaEloquentRepository;
use Illuminate\Support\ServiceProvider;

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
            PropuestaRepository::class,
            PropuestaEloquentRepository::class
        );
    }
}
