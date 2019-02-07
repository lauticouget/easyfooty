<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('LocationsService', \App\Services\LocationsService::class);
        $this->app->bind('StrongFootService', \App\Services\StrongFootService::class);
        $this->app->bind('PositionService', \App\Services\PositionService::class);
        $this->app->bind('ImageService', \App\Services\ImageService::class);

    }
}
