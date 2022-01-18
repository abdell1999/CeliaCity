<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\Pointofinterest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['resources'] = Resource::orderBy('title')->get();
        //dd($data['resources']);
        return view('resources.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$data['resources'] = Resource::all();

        return view('resources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'route' => 'required',
            'type' => 'required'

        ]);
      
        $resource = new Resource();
        $resource->date = $request->title;
        $resource->valoration = $request->route;
        $resource->text = $request->type;
        $resource->pointofinterests()->attach($request->puntosDeInteres); //->get()
        $resource->save();
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
        $data['resources'] = Resource::find($id);
        return view('resources.edit',$data);
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
        $data = $request->validate([
            'title' => 'required',
            'route' => 'required',
            'type' => 'required'

        ]);
      
        $resource = Resource::find($id);
        $resource->title = $data['title'];
        $resource->route = $data['route'];
        $resource->type = $data['type'];
        $resource->save();
        return redirect()->route('resources.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $id)
    {
        $resource = Resource::find($id);
        $resource->delete();
        return redirect()->route('resources.index');
    }
}
