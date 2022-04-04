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
}
