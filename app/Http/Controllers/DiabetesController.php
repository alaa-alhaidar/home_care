<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DiabetesController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class DiabetesController extends Controller{

    function showAllDiabetes($f_code){
        $diagnosen = DB::table('diabetes')->where('f_code', $f_code)->get();
        $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
        $userinfo = DB::table('patients')->where('f_code', $f_code)->get();
       return view ('admin/diabetes',compact('diagnosen','patinfo'));
    }



   
}