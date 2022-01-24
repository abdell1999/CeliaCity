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
        $this->hasMany('App\Models\Comment', 'id_pointofinterest');
    }

    public function resource(){
        return $this->belongsToMany('App\Models\Resource', 'pointofinterests_resources', 'id_resource', 'id_pointofinterest');
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Categorie', 'categories_pointofinterests', 'id_categorie', 'id_pointofinterest');
    }

}

