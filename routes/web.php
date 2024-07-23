<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VitalController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MassnahmenController;
use App\Http\Controllers\MedikamenteController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  
    if (auth()->check()) {
        return view('home');
    }
    
});
Route::get('/', [UserController::class, 'goHome']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/code', [UserController::class, 'goCode']);
Route::post('/tologin', [UserController::class, 'gologin']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/kontoSetup', [UserController::class, 'kontoErstellen']);

// 

Route::post('medikamente/{f_code}/{patinfo}', [MedikamenteController::class, 'showAllMed'])->name('med');
Route::post('medikamentePat/{f_code}/{patinfo}', [MedikamenteController::class, 'showAllMedPat'])->name('medPat');
Route::post('vz/{f_code}/{patinfo}', [MedikamenteController::class, 'govital'])->name('vz');
Route::post('add-med/{f_code}/{patinfo}', [MedikamenteController::class, 'addMed'])->name('add-med');
Route::post('insert-med/{f_code}/{patinfo}', [MedikamenteController::class, 'insertMed'])->name('insert-med');
Route::post('delete-med/{f_code}/{patinfo}/{id}', [MedikamenteController::class, 'deleteMed'])->name('delete-med');
// 

Route::get('/patinfo', [PatientController::class, 'showAllPatient']);
Route::get('/edit-post/{post}', [PatientController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [PatientController::class, 'actuallyUpdatePost']);
Route::delete('/delete-post/{post}', [PatientController::class, 'deletePost']);
Route::post('#', [PatientController::class, 'logout']);
Route::post('report/{f_code}/{patinfo}', [PatientController::class, 'showReport'])->name('report');
Route::get('pat_info/{f_code}/{patinfo}', [PatientController::class, 'showPatPerID'])->name('pat_info');
Route::post('edit-report/{f_code}/{patinfo}/{id}', [MedikamenteController::class, 'editReport'])->name('edit-report');

// MassnahmenController
Route::post('allProph/{f_code}', [MassnahmenController::class, 'showAllProhpylaxen'])->name('allProph');
Route::post('deku/{f_code}', [MassnahmenController::class, 'showDeku'])->name('deku');
Route::post('dekuRisiko/{f_code}', [MassnahmenController::class, 'dekuRisiko'])->name('dekuRisiko');

//VitalController
Route::post('insert-check/{f_code}/{patinfo}', [VitalController::class, 'insertCheck'])->name('insert-check');
Route::post('saveData/{f_code}', [VitalController::class, 'saveJson'])->name('saveData');
Route::post('/save-vital', [VitalController::class, 'saveVitalData'])->name('save.vital');
Route::post('/send-vital-pdf', [VitalController::class, 'sendVitalPDF'])->name('send-vital-pdf');

//Report
// route (controller-name and function insid it) (route-name)
Route::post('add-report/{f_code}/{patinfo}', [ReportController::class, 'addReport'])->name('add-report');
Route::post('insert-report/{f_code}/{patinfo}', [ReportController::class, 'insertReport'])->name('insert-report');

//home is the name of url. can be used by any bage to execute the function and return to home
Route::get('home', function(){
    return view('home');
});

Route::get('patientinfo', function(){
    return view('patientinfo');
});

Route::get('patientencheck', function(){
    return view('patientencheck');
});

Route::post('patientinfo', function(Request $request){
    return view('patientinfo');
});

