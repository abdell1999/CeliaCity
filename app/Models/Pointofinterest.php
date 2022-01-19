<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resource;

class Pointofinterest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'movilephone',
        'text'
    ];

    public function comments(){
        $this->hasMany('App\Models\Comment');
    }

    public function resource(){
        return $this-> hasMany('App\Models\Resource', 'id_resource', 'id_pointofinterest');
        //return $this-> hasMany('App\Models\Resource','id_pointofinterest', 'id_resource');
    }
}

