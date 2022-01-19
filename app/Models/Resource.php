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
        return $this->belongsToMany('App\Models\Pointofinterest', 'pointofinterests_resources', 'id_pointofinterest', 'id_resource');
    }
}
