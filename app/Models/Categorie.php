<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
      'name'
    ];

    public function pointofinterests(){
      return $this->belongsToMany('App\Models\Pointofinterest', 'categories_pointofinterests',  'id_pointofinterest','id_categorie');
  }
}
