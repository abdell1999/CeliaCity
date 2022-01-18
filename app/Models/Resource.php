<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pointofinterest;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'route',
        'type'
    ];

    public function pointofinterests(){
        return $this->hasMany('App\Models\Pointofinterest', 'id_pointofinterest', 'id_resource');
        //return $this->hasMany('App\Models\Pointofinterest', 'id_resource', 'id_pointofinterest');
        //return $this->belongsToMany(Pointofinterest::class);
    }
}
