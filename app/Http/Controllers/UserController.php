<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function __construct() {
        $this->middleware("auth")->except("show");
        $this->middleware("App\Http\Middleware\Administrate::class")->except("show","myprofile");
    }

    /**
     * Display a listing of the User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::all();

        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([ //faltan cosas por agregar
            'name' => 'required',
            'surname1' => 'required',
            'surname2' => 'nullable',
            'email'  =>   'required',
            'password'  =>   'required',
            'phone' =>   'required',
            'movilphone'  =>   'required',
            'borndate'  =>   'required',
            'address'  =>   'required',
            'rol'  =>   'required'
        ]);

        //dd($request);

        $user = new User();
        $user->name = $data['name'];
        $user->surname1 = $data['surname1'];
        $user->surname2 = $data['surname2'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->phone = $data['phone'];
        $user->movilphone = $data['movilphone'];
        $user->borndate = $data['borndate'];

        if(request('photo')){

            //'photo' => "/storage/" . $data['photo']->store('users', 'public'),
            $user->photo = "/storage/" . $request['photo']->store('users', 'public');

        }


        $user->address = $data['address'];
        $user->rol = $data['rol'];


        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['users'] = User::findOrFail($id);
        return view('users.show',$data);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        if($user)
        {
            return response()->json([
                'status'=>200,
                'user'=> $user
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No se encuentra usuario'
            ]);
        }
    }

    /**
     * Update the specified User in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'surname1' => ['required', 'string', 'max:255'],
            'surname2' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'min:9', 'max:9'],
            'movilphone' => ['required', 'min:9', 'max:9'],
            'borndate' => ['required'],
            'address' => ['required'],
            'photo' => ['nullable'],
        ]);

        if($validator->fails()){
            return response()->json([
                'status' =>400,
                'errors' => $validator->errors()->all()
            ]);
        }else{
            $user = User::findOrFail($id);
            if($user){
            $user->name = $request->input('name');
            $user->surname1 = $request->input('surname1');
            $user->surname2 = $request->input('surname2');
            $user->email = $request->input('email');
            $user->address = $request->input('address');
            $user->phone = $request->input('phone');
            $user->movilphone = $request->input('movilphone');
            $user->borndate = $request->input('borndate');
            $user->save();
            }
        }

        return response()->json([
            'status' =>200,
            'message' =>'Punto de interes añadido correctamente',
        ]);

        return redirect()->route('index');
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function destroy($id)
    {
        $user = User::find($id);
        $comment = Comment::find($id);
        $comment->delete();
        $user->delete();
        return redirect()->route('users.index');
    }*/

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if($user)
        {
            DB::table('comments')->where('id_user','=',$id)->delete();
            $user->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Usuario Borrado'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No encuentra Usuario'
            ]);
        }
        return redirect()->route('users.index');
    }


    public function fetchuser()
    {
        $users = User::all();
        return response()->json([
            'user'=>$users,
        ]);
    }

    public function myprofile($id){
        $data['user'] = User::findOrFail($id);
        return view('users.myprofile',$data);

    }

    public function updateprofile($id){

    }




}
