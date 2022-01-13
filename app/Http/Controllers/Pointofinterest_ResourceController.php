<?php

namespace App\Http\Controllers;

use App\Models\Pointofinterest_Resource;
use App\Models\Resource;
use App\Models\Pointofinterest;
use Illuminate\Http\Request;

class Pointofinterest_ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pointofinterests_resources'] = Pointofinterest_Resource::orderBy("name")->get();
        return view('pointofinterests_resources.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pointofinterests_resources'] = Pointofinterest_Resource::all();
        return view('pointofinterests_resources.create',$data);
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
            'idResource' => 'required',
            'idPointofinterest' => 'required',

        ]);
      
        $pointofinterest_resource = new Pointofinterest_Resource();
        $pointofinterest_resource->idResource = $data['idResource'];
        $pointofinterest_resource->idPointofinterest = $data['idPointofinterest'];
        $pointofinterest_resource->save();
        return redirect()->route('pointofinterests_resources.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pointofinterest_Resource  $pointofinterest_Resource
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['pointofinterests_resources'] = Pointofinterest_Resource::find($id);
        return view('pointofinterests_resources.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pointofinterest_Resource  $pointofinterest_Resource
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['pointofinterests_resources'] = Pointofinterest_Resource::find($id);
        return view('pointofinterests_resources.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pointofinterest_Resource  $pointofinterest_Resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'idResource' => 'required',
            'idPointofinterest' => 'required'

        ]);
      
        $pointofinterest_resource = Pointofinterest_Resource::find($id);
        $pointofinterest_resource->title = $data['idResource'];
        $pointofinterest_resource->route = $data['idPointofinterest'];
        $pointofinterest_resource->save();
        return redirect()->route('pointofinterests_resources.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pointofinterest_Resource  $pointofinterest_Resource
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pointofinterest_resource = Pointofinterest_Resource::find($id);
        $pointofinterest_resource->delete();
        return redirect()->route('pointofinterests_resources.index');
    }
}
