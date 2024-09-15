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
        return view('admin/home');
    }
    
});
Route::get('/', [UserController::class, 'goHome']);
Route::post('register', [UserController::class, 'register']);
Route::get('logout', [UserController::class, 'logout']);
Route::post('code', [UserController::class, 'goCode']);
Route::post('tologin', [UserController::class, 'gologin']);

Route::post('login', [UserController::class, 'login']);
Route::post('add_user', [UserController::class, 'add_usr'])->name('add_user');;
Route::post('insert_usr', [UserController::class, 'insert_usr'])->name('insert_usr');;
Route::post('show_usr', [UserController::class, 'showAllUsers'])->name('show_usr');
Route::post('change_psw_form/{id}', [UserController::class, 'change_password_form'])->name('change_psw_form');
Route::post('change_psw/{id}', [UserController::class, 'change_password'])->name('change_psw');

// 

Route::post('medikamente/{f_code}', [MedikamenteController::class, 'showAllMed'])->name('med');
Route::post('medikamentePat/{f_code}', [MedikamenteController::class, 'showAllMedPat'])->name('medPat');
Route::post('vz/{f_code}', [MedikamenteController::class, 'govital'])->name('vz');
Route::post('add-med/{f_code}', [MedikamenteController::class, 'addMed'])->name('add-med');
Route::post('insert-med/{f_code}', [MedikamenteController::class, 'insertMed'])->name('insert-med');
Route::post('delete-med/{f_code}/{id}', [MedikamenteController::class, 'deleteMed'])->name('delete-med');
// 

Route::get('/patinfo', [PatientController::class, 'showAllPatient']);
Route::get('/edit-post/{post}', [PatientController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [PatientController::class, 'actuallyUpdatePost']);
Route::delete('/delete-post/{post}', [PatientController::class, 'deletePost']);
Route::post('#', [PatientController::class, 'logout']);
Route::post('report/{f_code}', [PatientController::class, 'showReport'])->name('report');
Route::get('pat_info/{f_code}', [PatientController::class, 'showPatPerID'])->name('pat_info');
Route::post('edit-report/{f_code}/{patinfo}/{id}', [MedikamenteController::class, 'editReport'])->name('edit-report');
Route::post('add-patient}', [PatientController::class, 'addPat'])->name('add-patient');
Route::post('insert-pat/{f_code}', [PatientController::class, 'insertPat'])->name('insert-med');

// MassnahmenController
Route::post('allProph/{f_code}', [MassnahmenController::class, 'showAllProhpylaxen'])->name('allProph');
Route::post('deku/{f_code}', [MassnahmenController::class, 'showDeku'])->name('deku');
Route::post('dekuRisiko/{f_code}', [MassnahmenController::class, 'dekuRisiko'])->name('dekuRisiko');

//VitalController
Route::post('add-check/{f_code}', [VitalController::class, 'addcheck'])->name('add-check');
Route::post('insert-check/{f_code}', [VitalController::class, 'insertCheck'])->name('insert-check');
Route::post('delete-check/{f_code}/{id}', [VitalController::class, 'deleteCheck'])->name('delete-check');
Route::post('saveData/{f_code}', [VitalController::class, 'saveJson'])->name('saveData');
Route::post('/save-vital', [VitalController::class, 'saveVitalData'])->name('save.vital');
Route::post('/save-vital-pdf', [VitalController::class, 'saveVitalPDF'])->name('save.vital.pdf');

// Diagnosen
use App\Http\Controllers\DiagnosenController;
Route::post('allDiagnosis/{f_code}', [DiagnosenController::class, 'showAllDiagnosis'])->name('allDiagnosis');

// Diabetes
use App\Http\Controllers\DiabetesController;
Route::post('showDiabetes/{f_code}', [DiabetesController::class, 'showAllDiabetes'])->name('showDiabetes');

//Report
// route (controller-name and function insid it) (route-name)
Route::post('add-report/{f_code}', [ReportController::class, 'addReport'])->name('add-report');
Route::post('record-report/{f_code}', [ReportController::class, 'recordReport'])->name('record-report');
Route::post('insert-report/{f_code}', [ReportController::class, 'insertReport'])->name('insert-report');

// Termine
use App\Http\Controllers\TerminController;
Route::post('allTermine/{f_code}', [TerminController::class, 'showAllTermine'])->name('allTermine');

// route (controller-name and function insid it) (route-name)
Route::post('add-massnahme/{f_code}', [MassnahmenController::class, 'addMassnahme'])->name('add-massnahme');
Route::post('insert-massnahme/{f_code}', [MassnahmenController::class, 'insertMassnahme'])->name('insert-massnahme');

//home is the name of url. can be used by any bage to execute the function and return to home
Route::get('home', function(){
    return view('admin/home');
});


Route::get('/refresh-csrf', function() {
    return csrf_token();
});





