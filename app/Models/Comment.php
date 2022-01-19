<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'valoration',
        'text',
        'idUser',
        'idPoint'
    ];

    public function users(){
        return $this->belongsTo('App\Models\User','id_user');
    }

    public function pointofinterests(){
        return $this->belongsTo('App\Models\Pointofinterest');
    }

    public static function userName($id){
        $userid = DB::table('comments')
        ->select('id_user')
        ->where('id','=',$id);

        $username = DB::table('users')
        ->select('name','surname1','surname2')
        ->where('id','=',$userid);

        return $username;
    }
}
