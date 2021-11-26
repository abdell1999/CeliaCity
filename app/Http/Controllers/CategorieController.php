<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['categories'] = Categorie::all();
        return view('categories.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => 'required'
        ]);

        $categorie = new Categorie();
        $categorie->name = $data['name'];
        $categorie->save();

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data['categories']= Categorie::find($id);
        return view('categories.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['categories'] = Categorie::find($id);
        return view('categories.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->validate([
            'name' => 'required'
        ]);
        $categorie = Categorie::find($id);
        $categorie->name = $data['name'];
        $categorie->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect()->route('categories.index');
    }
}
