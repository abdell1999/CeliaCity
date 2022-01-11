<?php

namespace App\Http\Controllers;

use App\Models\Pointofinterest;
use App\Models\Categorie;
use Illuminate\Http\Request;

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

    /**
     * Store a newly created pointofinterest in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'movilephone' => 'required',
            'text'  =>   'required',
            'categoriespoint' => 'required'

        ]);

        $pointofinterest = new Pointofinterest();
        $pointofinterest->name = $data['name'];
        $pointofinterest->latitude = $data['latitude'];
        $pointofinterest->latitude = $data['longitude'];
        $pointofinterest->movilephone = $data['movilephone'];
        $pointofinterest->text = $data['text'];
        $pointofinterest->save();


        $pointid = Pointofinterest::where('name', $data['name'])->take(1)->get();



        foreach ($data->categoriespoint as $categoria) {
            DB::table('categories_pointofinterests')->insert([
                'id_categorie' => $categoria,
                'id_pointofinterest' => $pointid[0]->id,

                ])
        }


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
            'text'  =>   'required'

        ]);

        $pointofinterests = Pointofinterest::find($id);
        $pointofinterests->name = $data['name'];
        $pointofinterests->latitude = $data['latitude'];
        $pointofinterest->latitude = $data['longitude'];
        $pointofinterests->movilephone = $data['movilephone'];
        $pointofinterests->text = $data['text'];
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
        $pointofinterest->delete();
        return redirect()->route('pointofinterests.index');
    }
}
