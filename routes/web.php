<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\ChamberController;
use App\Http\Controllers\createUser;
use App\Models\User;

Auth::routes(['register' => false]);

//visitor routes
Route::get('/',[ChamberController::class,'fetchHomeData']); //show dynamic data in homepage
Route::post('addAppointment',[appointmentController::class, 'saveData']); //save appointment info to database
//Route::view('login','login'); //login view


//admin routes


//=============  User =============//
Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('appointment',[appointmentController::class,'fetchData'])->middleware('auth');; //show upcoming appointments
Route::get('all-appointment',[appointmentController::class,'fetchAllData']); //show all appointments
Route::get('patients',[appointmentController::class,'fetchPatientData']); //show all patients
Route::view('patient-single','singlePatient'); 
Route::get('patient-single={slug}={phone_slug}',[appointmentController::class,'fetchSinglePatientData']);
Route::get('user',[createUser::class,'showUser']);
Route::get('chamber',[ChamberController::class,'fetchData']);
Route::post('createuser',[createUser::class,'makeUser']);
Route::get('edit-chamber{id}', [ChamberController::class,'editData']);
Route::put('update-chamber', [ChamberController::class,'updateData']);

Route::get('edit-user{id}', [createUser::class,'editData']);
Route::delete('delete-user', [createUser::class,'deleteData']);
});

Route::get('/admin', function () {
    return redirect('/appointment');
});