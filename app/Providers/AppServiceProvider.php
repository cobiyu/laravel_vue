<?php

namespace App\Providers;

use App\Repositories\Contact;
use App\Repositories\GabiaDto;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(GabiaDto::class, function($app){
            return new Contact('test','ccccc');
        });

        $this->app->bind(SessionInterface::class, function($app){
            return new Session();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
