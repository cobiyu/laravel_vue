<?php

namespace App\Providers;

use App\Dto\common\GabiaDto;
use App\Dto\DtoFactory;
use App\Dto\GabiaUser\TestDto;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/*
http://localhost:8000/service?cobi=hagisilta&test_value=fdsa&test_arr[]=2&test_arr[]=3&test_value2[]=value2&test_value2[]=value33&user_id[]=cobiyu&register[]=ddd&email[]=test@a.com&user_id[]=cobiyu2&register[]=ddd2&email[]=test2@a.com#/
http://localhost:8000/service?cobi=hagisilta&test_value=fdsa&test_arr[]=2&test_arr[]=3&test_value2[]=value2&test_value2[]=value33&users[0][user_id]=users[0][user_id]=cobiyu&users[0][register]=ddd&users[0][email]=test@a.com&users[1][user_id]=cobiyu2&users[1][register]=ddd2&users[1][email]=test2@a.com
*/

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
            $request_param = $app->request->all();
            $test_dto = DtoFactory::getDto(TestDto::class, 'user', collect($request_param));
            return $test_dto;
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
