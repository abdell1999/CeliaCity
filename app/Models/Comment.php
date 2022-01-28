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
        'id_user',
        'id_pointofinterest'
    ];

    public function users(){
        return $this->belongsTo('App\Models\User','id_user');
    }

    public function pointofinterests(){
        return $this->belongsTo('App\Models\Pointofinterest','id_pointofinterest');
    }

}
