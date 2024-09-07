<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DiagnosenController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class DiagnosenController extends Controller{

    function showAllDiagnosis($f_code){
        $diagnosen = DB::table('diagnosen')->where('f_code', $f_code)->get();
        $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
        $userinfo = DB::table('patients')->where('f_code', $f_code)->get();
       return view ('patient/diagnosen',compact('diagnosen','patinfo'));
    }



   
}