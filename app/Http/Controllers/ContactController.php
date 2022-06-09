<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function index(){
        return view('team.contact');
    }


    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'comments' => 'required',
        ]);

        Mail::send('emails.contact', ['name' => $request->name, 'email' => $request->email, 'subject' => $request->subject, 'comments' => $request->comments], function($message) use($request){
            $message->to($request->email, 'admin@correo.com');
            $message->subject($request->subject);
        });







    }





}