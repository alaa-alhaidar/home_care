<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VitalController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MassnahmenController;
use App\Http\Controllers\MedikamenteController;

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
//by login go to patient info
Route::get('/', function () {
  
    if (auth()->check()) {
        return view('home');
    }
    
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

// 

Route::post('medikamente/{vers}/{patinfo}', [MedikamenteController::class, 'showAllMed'])->name('med');
Route::post('vz/{vers}/{patinfo}', [MedikamenteController::class, 'govital'])->name('vz');
Route::post('add-med/{vers}/{patinfo}', [MedikamenteController::class, 'addMed'])->name('add-med');
Route::post('insert-med/{vers}/{patinfo}', [MedikamenteController::class, 'insertMed'])->name('insert-med');
// 
Route::get('/', [UserController::class, 'goHome']);
Route::get('/patinfo', [PatientController::class, 'showAllPatient']);
Route::get('/edit-post/{post}', [PatientController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [PatientController::class, 'actuallyUpdatePost']);
Route::delete('/delete-post/{post}', [PatientController::class, 'deletePost']);
Route::post('#', [PatientController::class, 'logout']);

// MassnahmenController
Route::post('allProph/{vers}', [MassnahmenController::class, 'showAllDekubitusProhpylaxen'])->name('allProph');
Route::post('deku/{vers}', [MassnahmenController::class, 'showDeku'])->name('deku');
Route::post('dekuRisiko/{vers}', [MassnahmenController::class, 'dekuRisiko'])->name('dekuRisiko');
//VitalController
Route::post('insert-check/{vers}/{patinfo}', [VitalController::class, 'insertCheck'])->name('insert-check');
// 


//home is the name of url. can be used by any bage to execute the function and return to home
Route::get('home', function(){
    return view('home');
});

Route::get('patientinfo', function(){
    return view('patientinfo');
});

Route::post('patientinfo', function(Request $request){
    return view('patientinfo');
});