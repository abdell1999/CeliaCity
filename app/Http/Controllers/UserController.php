<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
            'phone' =>   'required max:9 min:9',
            'movilphone'  =>   'required max:9 min:9',
            'borndate'  =>   'required',
            'address'  =>   'required',
            'rol'  =>   'required'


        ]);

        $user = new User();
        $user->name = $data['name'];
        $user->surname1 = $data['surname1'];
        $user->surname2 = $data['surname2'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->phone = $data['phone'];
        $user->movilephone = $data['movilephone'];
        $user->borndate = $data['borndate'];

        if(request('photo')){

            //'photo' => "/storage/" . $data['photo']->store('users', 'public'),
            $user->photo = "/storage/" . $request['photo']->store('users', 'public');

        }


        $user->address = $data['address'];
        $user->rol = $data['rol'];


        $User->save();
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
        $data['users'] = User::find($id);
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
        $data['users'] = User::find($id);
        return view('users.edit',$data);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        //dd($request);

        $data = $request->validate([
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



        $user = User::find($id);
        $user->name = $data['name'];
        $user->surname1 = $data['surname1'];
        $user->surname2 = $data['surname2'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->movilphone = $data['movilphone'];
        $user->borndate = $data['borndate'];


        //$user->photo = "/storage/" . $data['photo']->store('users', 'public');

        if(request('photo')){

            //'photo' => "/storage/" . $data['photo']->store('users', 'public'),
            $user->photo = "/storage/" . $request['photo']->store('users', 'public');

        }

        $user->address = $data['address'];
        //$user->rol = $data['rol'];
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $comment = Comment::find($id);
        $comment->delete();
        $user->delete();
        return redirect()->route('users.index');
    }


    public function fetchuser()
    {
        $users = User::all();
        return response()->json([
            'user'=>$users,
        ]);
    }






}
