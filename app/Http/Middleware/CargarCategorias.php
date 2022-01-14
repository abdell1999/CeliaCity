<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CargarCategorias
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $prueba = 5;

        if($prueba>6){
            $todasCategorias = Categorie::all();
            //dd($todasCategorias);

            //$todasCategorias = $todasCategorias->toArray();

            $todasCategorias = "HOOOOLA";

            //dd($todasCategorias);


            //return $todasCategorias;
            return $next($request);
        }


        else{
            $todasCategorias = Categorie::all();
            //dd($todasCategorias);

            //$todasCategorias = $todasCategorias->toArray();

            $todasCategorias = "HOOOOLA";

            //dd($todasCategorias);
            return $todasCategorias;
        }
    }
}
