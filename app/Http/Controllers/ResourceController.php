<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\Pointofinterest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class ResourceController extends Controller
{

    public function __construct() {
        $this->middleware("auth")->except("show");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['resources'] = Resource::orderBy('title')->get();
        $data['pointofinterests'] = Pointofinterest::all();
        //dd($data['resources']);
        return view('resources.index', $data);
    }

    public function fetchresources(){
        $resources = Resource::all();
        return response()->json([
            'resources' => $resources,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['resources'] = Resource::all();
        $data['pointofinterests'] = Pointofinterest::all();

        return view('resources.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        //Si no carga la galería hay que hacer un php artisan storage:link para que se conecte public con uploads.
        //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

        $request->validate([
            'images' => 'required',
            'pointofinterests' => 'required',
          ]);

        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach($images as $image) {
                $name = Str::random(10).'.'.$image->getClientOriginalExtension();
                $path = $image->storeAs('uploads', $name, 'public');

                $resource= new Resource();
                $resource -> title = $name;
                $resource -> route = '/storage/'.$path;
                $resource -> save();

                $resourceid= Resource::where('title',$name)->take(1)->get();
                    foreach($request->pointofinterests as $pointofinterest){
                        //$resource->pointofinterests()->attach($request->puntosDeInteres); //->get()
                        DB::table('pointofinterests_resources') ->insert([
                            'id_pointofinterest' => $pointofinterest,
                            'id_resource' => $resourceid[0]->id,
                        ]);

                    }
            }
        }

        return redirect()->route('resources.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['resources'] = Resource::find($id);
        return view('resources.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resource = Resource::find($id);
        if($resource){
            return response()->json([
                'status'=> 200,
                'resource' => $resource,
            ]);
        }else{
            return response()->json([
                'status'=> 404,
                'message'=> 'No se encuentra la imagen',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors()->all(),
            ]);
        }else{
            $resource = Resource::find($id);
            if($resource){
                $resource->title = $request->input('title');
                $resource->update();
                return response()->json([
                    'status' => 200,
                    'message' => 'Recurso actualizado correctamente',
                ]);
            }else{
                return response()->json([
                    'status' => 404,
                    'errors' => 'No se encuentra el recurso'
                ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resource = Resource::find($id);

        if($resource)
        {
            $resource->pointofinterests()->detach();
            $resource->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Recurso Borrado'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No encuentra Recurso'
            ]);
        }
        return redirect()->route('resources.index');
    }
}
