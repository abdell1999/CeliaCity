<?php

namespace App\Http\Controllers;

use App\Models\Pointofinterest;
use App\Models\Categorie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PointofinterestController extends Controller
{


    public function __construct(){
        $this->middleware("auth")->except("show");
    }


    /**
     * Display a listing of the pointofinterest.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pointofinterests'] = Pointofinterest::orderBy("name")->get();
        return view('pointofinterests.index');
    }

    /**
     * Show the form for creating a new pointofinterest.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Categorie::all();

        return view('pointofinterests.create',$data);

    }

    public function fetchpoint()
    {
        $pointofinterests = Pointofinterest::all();
        return response()->json([
            'pointofinterest'=>$pointofinterests,
        ]);
    }

    /**
     * Store a newly created pointofinterest in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'movilephone' => 'required',
            'text'  =>   'required',
            'categoriespoint' => 'required'
        ]);
        if($validator->fails()){
            return response()->json(['status' =>400,'errors' => $validator->errors()->all()]);
        }else{
            $pointofinterest = new Pointofinterest();
            $pointofinterest->name = $request->input('name');
            $pointofinterest->latitude = $request->input('latitude');
            $pointofinterest->longitude = $request->input('longitude');
            $pointofinterest->movilephone = $request->input('movilephone');
            $pointofinterest->text = $request->input('text');
            $pointofinterest->save();
            $pointofinterest->categories()->sync($request->categoriespoint);

        }

        return response()->json([
            'status' =>200,
            'message' =>'Punto de interes añadido correctamente',
        ]);

        return redirect()->route('pointofinterests.index');
    }

    /**
     * Display the specified pointofinterest.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['pointofinterests'] = Pointofinterest::find($id);
        $data['users'] = User::all();
        $data['comments'] = $data['pointofinterests']->comments;
        $data['resources'] = Pointofinterest::find($id)->resources;
        //dd($data['resources']);
        //dd($data['comments']);

        return view('pointofinterests.show',$data);
    }

    /**
     * Show the form for editing the specified pointofinterest.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Punto de interes segun el id
        $pointofinterests = Pointofinterest::find($id);
        //Categorias relacionadas con el punto de interes
        $categories = Pointofinterest::find($id)->categories;
        //Todas las categorias
        $allcategories = Categorie::all();

        $categorieselected = [];
        foreach ($allcategories as $allcategorie){
            $idcategorie = $allcategorie->id;
            $categorianame = $allcategorie-> name;
            $categoria = [
                "id" => $idcategorie,
                "name" => $categorianame,
                "selected" => false,
            ];
            array_push($categorieselected, $categoria);
        }
        foreach ($categories as $categorie){
            $id = $categorie->id;
            for ($i = 0; $i < count($categorieselected); $i++){
                if($id == $categorieselected[$i]['id']){
                    $categorieselected[$i]['selected'] = true;
                }
            }
        }

        if($pointofinterests)
        {
            return response()->json([
                'status'=>200,
                'pointofinterests'=> $pointofinterests,
                'categories'=> $categorieselected,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No pointofinterest Found.'
            ]);
        }

        //return view('pointofinterests.edit',$data);
    }

    /**
     * Update the specified pointofinterest in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'movilephone' => 'required',
            'text'  =>   'required',
            'categoriespoint' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' =>400,
                'errors' => $validator->errors()->all()
            ]);
        }else{
            $pointofinterest = Pointofinterest::find($id);
            if($pointofinterest){
            $pointofinterest->name = $request->input('name');
            $pointofinterest->latitude = $request->input('latitude');
            $pointofinterest->longitude = $request->input('longitude');
            $pointofinterest->movilephone = $request->input('movilephone');
            $pointofinterest->text = $request->input('text');
            $pointofinterest->save();
            $pointofinterest->categories()->sync($request->categoriespoint);
            }
        }

        return response()->json([
            'status' =>200,
            'message' =>'Punto de interes añadido correctamente',
        ]);

        return redirect()->route('pointofinterests.index');
    }

    /**
     * Remove the specified pointofinterest from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pointofinterest = Pointofinterest::find($id);

        if($pointofinterest)
        {
            $pointofinterest->categories()->detach();
            $pointofinterest->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Punto de interes Borrado'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No encuentra Punto de interes'
            ]);
        }
        return redirect()->route('pointofinterests.index');
    }
}
