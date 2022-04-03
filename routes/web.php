<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Route::view('appointment','index');
Route::post('addAppointment',[appointmentController::class, 'saveData']);
Route::view('login','login');
// Route::view('appointment','appointment');
Route::get('appointment',[appointmentController::class,'fetchData']);
Route::get('all-appointment',[appointmentController::class,'fetchAllData']);
// Route::view('patients','patients');
Route::get('patients',[appointmentController::class,'fetchPatientData']);
Route::view('patient-single','singlePatient');
Route::get('patient-single={slug}={phone_slug}',[appointmentController::class,'fetchSinglePatientData']);
Route::view('user','user');

