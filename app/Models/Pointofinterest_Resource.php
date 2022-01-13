<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointofinterest_Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'idResource',
        'idPointofinterest'
    ];
}
