<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

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

        /**
         * Es necesario controlar esto con una variable ya que si no siempre va a intentar acceder a la bd
         * lo cual imposibilita hacer migraciones y etc.
         */

        //Esta posicion de array controla la plantilla activa
        $dataoptions['template'] = 2;

        //dd($data);


        View::share('dataoptions',$dataoptions);



    }
}
