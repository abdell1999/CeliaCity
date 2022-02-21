<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{

    /**TENER EN CUENTA QUE SE PUEDA MODIFICAR ESTO COMO MÍNIMO
     * Opciones para CeliaCity:
     * -Favicon
     * -Nombre del pueblo
     * -Logo
     * -Ubicación del pueblo
     * -Portada
     * -Meta título
     * -Meta descripción
     * -Propietario de la página
     * -Descripción reducida del pueblo
     * -Descripcion extensa del pueblo
     * -Selector de temas para el sitio
     *
     */






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['options'] = Option::all();
        return view("options.index", $data);
    }

    public function getoption($id)
    {
        $option = Option::find($id);
        return response()->json([
            'option'=>$option,
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }






    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, $type = "")
    {
        $option = Option::find($id);

        $data = $request->validate([
            'value' => 'required',
            'type' => 'required'
        ]);
        $type = $data['type'];


        $option->value = "DEFAULT VALUE";


        if($type == "text"){
            $option->value = $data['value'];
        }

        if($type == "image"){
            //$user->photo = "/storage/" . $request['photo']->store('users', 'public');
            //$option->value = "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Lower_Manhattan_from_Jersey_City_November_2014_panorama_3.jpg/365px-Lower_Manhattan_from_Jersey_City_November_2014_panorama_3.jpg";
            //$option->value =  "/storage/" . $request['value']->store('options', 'public');
            $option->value = "/storage/" . $request['value']->store('options', 'public');
        }


        $option->save();
    }

}
