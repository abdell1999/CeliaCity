<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use App\Models\Option;
use App\Models\Categorie;
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
        //Schema::defaultStringLength(1000);
        /**
         * Es necesario controlar esto con una variable ya que si no siempre va a intentar acceder a la bd
         * lo cual imposibilita hacer migraciones y etc.
        */

        //Esta posicion de array controla la plantilla activa y demás datos que igual se han pesados de cargar por ajax actualmente

        $dataoptions['template'] = Option::find(16)->value;
        $dataoptions['coverpage'] = Option::find(5)->value;
        $dataoptions['coverpage2'] = Option::find(15)->value;
        $dataoptions['townname'] = Option::find(2)->value;
        $dataoptions['shortdescription'] = Option::find(9)->value;
        $dataoptions['longdescription'] = Option::find(10)->value;
        $dataoptions['history'] = Option::find(17)->value;

        //$dataoptions['template'] = 2;


        $dataoptions['categories'] = Categorie::all();
        //dd($data);


        View::share('dataoptions',$dataoptions);



    }
}
