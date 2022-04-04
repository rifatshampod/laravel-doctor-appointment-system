<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class createUser extends Controller
{
    protected function makeUser(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            
        ]);

        User::create([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => Hash::make($req->input('password'),),
        ]);

        return redirect('user');

    }

    function showUser()
    {
        $userList = User::all();
        return view('dr/user', ['userlist' => $userList]);
    }
}
