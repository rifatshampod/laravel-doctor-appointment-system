<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\ChamberController;
use App\Models\User;

Auth::routes();

//visitor routes
Route::get('/',[ChamberController::class,'fetchHomeData']); //show dynamic data in homepage
Route::post('addAppointment',[appointmentController::class, 'saveData']); //save appointment info to database
//Route::view('login','login'); //login view


//admin routes
Route::get('appointment',[appointmentController::class,'fetchData']); //show upcoming appointments
Route::get('all-appointment',[appointmentController::class,'fetchAllData']); //show all appointments
Route::get('patients',[appointmentController::class,'fetchPatientData']); //show all patients
Route::view('patient-single','singlePatient'); 
Route::get('patient-single={slug}={phone_slug}',[appointmentController::class,'fetchSinglePatientData']);
Route::view('user','user');
Route::get('chamber',[ChamberController::class,'fetchData']);

//=============  User =============//
Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('user', function(){
        if(Auth::user()->exists() ){
			$user = User::where('id',Auth::id())->first();
       
            return view('user', compact('user'));
        
        } else{
			
            return view('/');
        }
    });
});