<?php

namespace App\Http\Controllers;
use App\Models\User;
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
            'email'  =>   'required',
            'password'  =>   'required',
            'phone' =>   'required max:9 min:9',
            'movilephone'  =>   'required max:9 min:9',
            'borndate'  =>   'required',
            'photo'  =>   'required', //falta poner image en el required de momento no lo pongo para futuras pruebas
            'address'  =>   'required',
            'rol'  =>   'required'
            

        ]);
      
        $User = new User();
        $User->name = $data['name'];
        $User->surname1 = $data['surname1'];
        $User->surname2 = $data['surname2'];
        $User->email = $data['email'];
        $User->password = $data['password'];
        $User->phone = $data['phone'];
        $User->movilephone = $data['movilephone'];
        $User->borndate = $data['borndate'];
        $User->photo = $data['photo'];
        $User->address = $data['address'];
        $User->rol = $data['rol'];
        

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
    public function update(Request $request, $id)
    {
        $data = $request->validate([ //faltan cosas por agregar
            'name' => 'required',
            'surname1' => 'required',
            'email'  =>   'required',
            'password'  =>   'required',
            'phone' =>   'required max:9 min:9',
            'movilephone'  =>   'required max:9 min:9',
            'borndate'  =>   'required',
            'photo'  =>   'required', //falta poner image en el required de momento no lo pongo para futuras pruebas
            'address'  =>   'required',
            'rol'  =>   'required'

        ]);
      
        $users = User::find($id);
        $User->name = $data['name'];
        $User->surname1 = $data['surname1'];
        $User->surname2 = $data['surname2'];
        $User->email = $data['email'];
        $User->password = $data['password'];
        $User->phone = $data['phone'];
        $User->movilephone = $data['movilephone'];
        $User->borndate = $data['borndate'];
        $User->photo = $data['photo'];
        $User->address = $data['address'];
        $User->rol = $data['rol'];
        $users->save();
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
        $User = User::find($id);
        $User->delete();
        return redirect()->route('users.index');
    }
}