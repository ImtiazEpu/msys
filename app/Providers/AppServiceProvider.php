<?php

namespace App\Providers;

use Facade\Ignition\Ignition;
use Illuminate\Support\ServiceProvider;
use Mazedlx\MigrationsTab\MigrationsTab;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Ignition::tab(new MigrationsTab);
    }
}
