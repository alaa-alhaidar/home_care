<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;

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


//home is the name of url. can be used by any bage to execute the function and return to home
Route::get('home', function(){
    return view('home');
});

Route::get('add-rmv', function () {
    return view('addAttr'); 
});

Route::post('/save-json', [FileController::class, 'saveJson'])->name('save-json');





