<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pointofinterest;
class CategorieController extends Controller {

    public function __construct() {
        $this->middleware("auth")->except("show");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $data['categories'] = Categorie::all();
        return view('categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $categorie = new Categorie();
        $categorie->name = $request->name;
        $categorie->save();

        echo $categorie->id;
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
        $data['categorie'] = Categorie::find($id);

        $pointofinterest = Categorie::find($id)->pointofinterests;

        $data['recursospoints'] = DB::table('categories')
        ->select('pointofinterests.id','pointofinterests.name', 'resources.route', 'resources.title')
        ->join('categories_pointofinterests','categories.id','=','categories_pointofinterests.id_categorie')
        ->leftJoin('pointofinterests','categories_pointofinterests.id_pointofinterest','=','pointofinterests.id')
        ->leftJoin('pointofinterests_resources','pointofinterests.id','=','pointofinterests_resources.id_pointofinterest')
        ->leftJoin('resources','pointofinterests_resources.id_resource','=','resources.id')
        ->where('categories.id','=',$id)
        ->get();


        //Seleccionamos los puntos de interes que pertenecen a la categoría que nos interesa recibida mediante la url
        //$selected = DB::table('categories_pointofinterests')->where('id_categorie', $id)->get();
        //dd($selected);
        $data['selected'] = DB::table('categories_pointofinterests')
            ->join('pointofinterests', 'categories_pointofinterests.id_pointofinterest', '=', 'pointofinterests.id')
            ->where('categories_pointofinterests.id_categorie', '=', $id)
            ->select('*')
            ->get();


            //dd($data);



        return view('categories.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $data['categories'] = Categorie::find($id);
        return view('categories.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $categorie = Categorie::find($id);
        //echo "Nombre original ".$categorie->name. " Nombre nuevo: ".$request->name;
        //dd($request);

        $data = $request->validate([
            'name' => 'required'
        ]);

        $categorie->name = $data['name'];
        $categorie->save();
        //echo "Ya esta";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect()->route('categories.index');
    }
}
