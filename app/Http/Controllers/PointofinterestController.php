<?php

namespace App\Http\Controllers;

use App\Models\Pointofinterest;
use App\Models\Categorie;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        return view('pointofinterests.index', $data);
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
            'pointofinterests'=>$pointofinterests,
        ]);
    }

    /**
     * Store a newly created pointofinterest in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        /* $data = $request->validate([
            'name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'movilephone' => 'required',
            'text'  =>   'required',
            'categoriespoint' => 'required'

        ]);
        */
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


        /*
        $pointofinterest = new Pointofinterest();
        $pointofinterest->name = $data['name'];
        $pointofinterest->latitude = $data['latitude'];
        $pointofinterest->longitude = $data['longitude'];
        $pointofinterest->movilephone = $data['movilephone'];
        $pointofinterest->text = $data['text'];
        $pointofinterest->save();
        $pointofinterest->categories()->sync($request->categoriespoint,);

        $pointid = Pointofinterest::where('name', $data['name'])->take(1)->get();

        foreach($request->categoriespoint as $categoria){
            DB::table('categories_pointofinterests')->insert([
                'id_categorie' => $categoria,
                'id_pointofinterest' => $pointid[0]->id

            ]);
        }
        */

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
        $data['comments'] = Comment::all();
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
        $data['pointofinterests'] = Pointofinterest::find($id);
        $data['categories']= Categorie::all();
        $data['categoriespoint'] = DB::table('categories_pointofinterests')
        ->where('id_pointofinterest','=',$id)
        ->get();
        //dd($data['categoriespoint']);
        return view('pointofinterests.edit',$data);
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
        $data = $request->validate([
            'name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'movilephone' => 'required',
            'text'  =>   'required',
            'categoriespoint' => 'required'
        ]);
        $sql = 'delete from categories_pointofinterests where id_pointofinterest = '. $id;
        DB::unprepared($sql);
        $pointofinterests = Pointofinterest::find($id);
        $pointofinterests->name = $data['name'];
        $pointofinterests->latitude = $data['latitude'];
        $pointofinterests->latitude = $data['longitude'];
        $pointofinterests->movilephone = $data['movilephone'];
        $pointofinterests->text = $data['text'];
        foreach($request->categoriespoint as $categoria){
            DB::table('categories_pointofinterests')->insert([
                'id_categorie' => $categoria,
                'id_pointofinterest' => $id

            ]);
        }
        $pointofinterests->save();
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
        $sql = 'delete from categories_pointofinterests where id_pointofinterest = '. $id;
        DB::unprepared($sql);
        $pointofinterest->delete();
        return redirect()->route('pointofinterests.index');
    }
}
