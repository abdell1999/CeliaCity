<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use App\Models\Pointofinterest;

class GuideController extends Controller
{
    public function guide(){
        $data['resources'] = Resource::all();
        $data['pointofinterests'] = Pointofinterest::all();
        return view('guide', $data);
    }

    public function showpoint($id){
        //Punto de interes segun el id
        $pointofinterests = Pointofinterest::find($id);
        $resources = Pointofinterest::find($id)->resources;

        if($pointofinterests)
        {
            return response()->json([
                'status'=>200,
                'pointofinterests'=> $pointofinterests,
                'resources' => $resources,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No pointofinterest Found.'
            ]);
        }
    }
}
