<?php

namespace App\Http\Controllers;

use App\Models\Pointofinterest;
use Illuminate\Http\Request;

class PointofinterestController extends Controller
{
    /**
     * Display a listing of the pointofinterest.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pointofinterests'] = Pointofinterest::all();

        return view('pointofinterests.index', $data);
    }

    /**
     * Show the form for creating a new pointofinterest.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pointofinterests.create');
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
            'ubication' => 'required',
            'movilephone' => 'required',
            'text'  =>   'required'

        ]);
      
        $pointofinterest = new Pointofinterest();
        $pointofinterest->name = $data['name'];
        $pointofinterest->ubication = $data['ubication'];
        $pointofinterest->movilephone = $data['movilephone'];
        $pointofinterest->text = $data['text'];
        $pointofinterest->save();
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
            'ubication' => 'required',
            'movilephone' => 'required',
            'text'  =>   'required'

        ]);
      
        $pointofinterests = Pointofinterest::find($id);
        $pointofinterests->name = $data['name'];
        $pointofinterests->ubication = $data['ubication'];
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
