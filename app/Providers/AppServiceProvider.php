<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Categorie;
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

        View::share('key', 'value');
        Schema::defaultStringLength(191);

        $categoriesS=Categorie::all();

        //dd($categories);

        View::share('categoriesS',$categoriesS);
    }
}
