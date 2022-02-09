<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use App\Models\Pointofinterest;

class GuideController extends Controller
{
    public function guide(){
        $data['resources'] = Resource::all();
        $data['pointofinterest'] = Pointofinterest::all();
        return view('guide', $data);
    }

    public function showpoint($id){
        
    }
}
