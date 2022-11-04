<?php

namespace Meshoko\Commands;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'Inspire');
    }

    public function register()
    {
        $this->app->singleton('command.meshoko.artisan-joke',function($app){
         return $app['Meshoko\Commands\JokeCommand'];
        });
        $this->commands('command.meshoko.artisan-joke');
    }
}