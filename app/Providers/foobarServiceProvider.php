<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class foobarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        var_dump('World');
        dd('hello');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        var_dump('World');
        dd('hello');
    }
}
