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
        return $this->belongsTo('App\Models\Pointofinterest','id_pointofinterest');
    }

}
