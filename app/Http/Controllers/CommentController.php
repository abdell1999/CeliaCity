<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Pointofinterest;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['comments'] = Comment::all();

        return view('comments.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users'] = User::all();
        $data['pointofinterests'] = Pointofinterest::all();
        return view('comments.create', $data);
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
            'date' => 'required',
            'valoration' => 'required',
            'text' => 'required',
            'users' => 'required',
            'pointofinterests'  =>   'required'

        ]);

        $comment = new Comment();
        $comment->date = $data['date'];
        $comment->valoration = $data['valoration'];
        $comment->text = $data['text'];
        $comment->id_user = $data['users'];
        $comment->id_pointofinterest = $data['pointofinterests'];
        $comment->save();
        return redirect()->route('comments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['comments'] = Comment::find($id);
        return view('comments.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['comments'] = Comment::find($id);
        return view('comments.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = $request->validate([
            'date' => 'required',
            'valoration' => 'required',
            'text' => 'required',
            'idUser'  =>   'required',
            'idPoint' => 'required'

        ]);

        $comment = Comment::find($id);
        $comment->date = $data['date'];
        $comment->valoration = $data['valoration'];
        $comment->text = $data['text'];
        $comment->id_user = $data['idUser'];
        $comment->id_pointofinterest = $data['idPoint'];
        $comment->save();
        return redirect()->route('comments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('comments.index');
    }
}
