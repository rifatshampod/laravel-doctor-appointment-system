<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use nirab\boomcastsms\Models\SendSms;



use Illuminate\Http\Request;

class appointmentController extends Controller
{
    function saveData(Request $req)
    {
        $req->validate([
            'name'=>'required | min:3',
            'phone'=>'required',
            'date'=>'required',
            'time'=>'required'  
        ]);
        
        $app = new Appointment;
        $app->name = $req->input('name');
        $app->phone=$req->input('phone');
        $app->email=$req->input('email');
        $app->symptoms=$req->input('symptoms');
        $app->date =$req->input('date');
        $app->time =$req->input('time');
        $app->save();

        //send sms
        // $number=$req->input('phone');;
        // $msg="Dear ".$req->input('name').", your appointment on ".$req->input('date')." at ".$req->input('time')." is submitted for approval. Thank you";

        // SendSms::send($number,$msg);

        
        $req->session()->flash('status','New job added successfully');
        return redirect('/');
    }
}
