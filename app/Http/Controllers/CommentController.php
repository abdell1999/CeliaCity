<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Pointofinterest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Option;
class CommentController extends Controller
{

    public function __construct() {
        $this->middleware("auth")->except("fetchcomments", "fetchcomment");
        $this->middleware("App\Http\Middleware\Administrate::class")->except("fetchcomment", "fetchcomments", "store", "edit", "update", "comentar", "deletecomment");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['comments'] = Comment::all();
        $data['users'] = User::all();
        $data['points'] = Pointofinterest::all();

        return view('comments.index', $data);
    }

    public function fetchcomments(){
        $comments = Comment::all();
        $users = User::all();
        $points = Pointofinterest::all();

        return response()->json([
            'comments' => $comments,
            'users' => $users,
            'points' => $points,
        ]);
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
        //$data['comments'] = Comment::findOrFail($id);
        //return view('comments.show',$data);
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comments = Comment::findOrFail($id);
        $usuario = Comment::findOrFail($id)->users;
        $nombre = $usuario['name']." ".$usuario['surname1']." ".$usuario['surname2'];
        $punto = Comment::findOrFail($id)->pointofinterests;
        $pointofinterest = $punto['name'];

        if($comments)
        {
            return response()->json([
                'status'=>200,
                'comment'=> $comments,
                'username'=>$nombre,
                'pointofinterest'=>$pointofinterest,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No se encuentra comentario'
            ]);
        }
        //return view('comments.edit',$data);
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
        $validator = Validator::make($request->all(), [
            'text'  =>   'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' =>400,
                'errors' => $validator->errors()->all()
            ]);
        }else{
            $comment = Comment::find($id);
            if($comment){
            $comment->text = $request->input('text');
            $comment->save();
            }
        }

        return response()->json([
            'status' =>200,
            'message' =>'Comentario editado correctamente',
        ]);

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
        $comment = Comment::findOrFail($id);

        if($comment)
        {
            $comment->delete();
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
        return redirect()->route('comments.index');
    }

    public function comentar(Request $request){
        $comment = new Comment();
        $comment->date = now();
        $comment->text = $request->text;
        $comment->valoration=5;
        $comment->id_user = Auth::id();
        $comment->id_pointofinterest = $request->id_pointofinterest;
        $comment->save();

    }


    public function fetchcomment($id_pointofinterest)
    {
            $moderate = Option::find(18);
            //return $moderate;
            if($moderate->value == 0){
                $comments = Comment::where('id_pointofinterest', '=', $id_pointofinterest)->orderBy('created_at', 'desc')->get();
            }else{
            $comments = Comment::where('id_pointofinterest', '=', $id_pointofinterest)->where('approved','=', 1)->orderBy('created_at', 'desc')->get();
        }





        $users = User::all();



        return response()->json([
            'comments'=>$comments,
            'users'=>$users,
        ]);
    }

    public function deletecomment($id)
    {
        $comment = Comment::findOrFail($id);

        if($comment)
        {
            $comment->delete();
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
        return redirect()->route('comments.index');
    }

    public function approveComment($id){
        $comment = Comment::findOrFail($id);
        $comment->approved = 1;
        $comment->save();
        return "OKEY";


    }



}
