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
        return $this->hasMany('App\Models\Comment', 'id_pointofinterest');
    }

    public function resources(){
        return $this->belongsToMany('App\Models\Resource', 'pointofinterests_resources', 'id_pointofinterest','id_resource');
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Categorie', 'categories_pointofinterests', 'id_pointofinterest', 'id_categorie');
    }
}

