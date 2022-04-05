<?php

namespace App\Http\Controllers;
use App\Models\Chamber;

use Illuminate\Http\Request;

class ChamberController extends Controller
{
    function fetchData(Request $req)
    {  
        $chamberList = Chamber::all();
        return view('dr/chamber', ['chamberlist' => $chamberList]);
    }

    function fetchHomeData(Request $req)
    {  
        $chamberList = Chamber::all();
        return view('index', ['chamberlist' => $chamberList]);
    }

    function editData($id){
        $chamber=Chamber::find($id);
        return response()->json([
            'status'=>200,
            'chamber'=>$chamber,
        ]);
    }

    function updateData(Request $req){
        $chamber_id = $req->input('chamber_id');
        $chamber=Chamber::find($chamber_id);
        $chamber->name=$req->input('name');
        $chamber->address=$req->input('address');
        $chamber->phone=$req->input('phone');
        $chamber->time=$req->input('time');
        $chamber->update();

        return redirect()->back()->with('status','Chamber information has been updated');
    }
}