<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use nirab\boomcastsms\Models\SendSms;



use Illuminate\Http\Request;

class appointmentController extends Controller
{
    function saveData(Request $req)
    {
         $date=$req->input('date');
        $req->validate([
            'name'=>'required | min:3',
            'phone'=>'required',
            'date'=>'required',
            'time'=> [
                'required',
                Rule::unique('appointments')
                    ->where('date', $date)
            ]
        ]);
        $time= Carbon::createFromFormat('g:ia', $req->input('time'));
        
        
        $app = new Appointment;
        $app->name = $req->input('name');
        $app->phone=$req->input('phone');
        $app->email=$req->input('email');
        $app->chamber = $req->input('chamber');
        $app->symptoms=$req->input('symptoms');
        $app->date =$date;
        $app->time =$time;
        $app->save();

        //send sms
        // $number=$req->input('phone');
        // $msg="Dear ".$req->input('name').", your appointment on ".$req->input('date')." at ".$req->input('time')." is submitted for approval. Thank you";

        // $drNumber='01686520282';  //doctor number
        // $drMsg="Dear doctor, appointment for ".$req->input('name').", on ".$req->input('date')." at ".$req->input('time')." is submitted for approval. Thank you";


        // SendSms::send($number,$msg);
        // SendSms::send($drNumber,$drMsg);

        $req->session()->flash('status','New job added successfully');
        return redirect('/')->with('message', 'Appointment added successfully');
        
    }

    function fetchData(Request $req)
    {
        $mytime =date("Y-m-d");
        $appointmentList = Appointment::orderBy('date','ASC')
        ->where('date','>',$mytime)
        ->get();
        return view('dr/appointment', ['appointmentlist' => $appointmentList,'type'=>'Upcoming Appointments']);
    }

    function fetchAllData(Request $req)
    {
        $mytime =date("Y-m-d");
        $appointmentList = Appointment::all();
        return view('dr/appointment', ['appointmentlist' => $appointmentList,'type'=>'All Appointments']);
    }

    function fetchPatientData(Request $req)
    {  
        $patientList = Appointment::groupBy('name','phone')
        ->get();
        return view('dr/patients', ['patientlist' => $patientList]);
    }

    function fetchSinglePatientData($slug, $phone_slug)
    {  
    

        if(Appointment::where('name',$slug)->exists())
        {
            $patient = Appointment::where('name',$slug)->where('phone',$phone_slug)->first();
            $appointments = Appointment::where('name',$slug)
            ->where('phone',$phone_slug)
            ->get();

            return view('dr/singlePatient',compact('appointments'))->with('patient',$patient);
        }
        else{

            return redirect('/')->with('status',"The link is broken");
        }
    }

}