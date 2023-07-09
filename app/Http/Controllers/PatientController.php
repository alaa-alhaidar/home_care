<?php

namespace App\Http\Controllers;

use view;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
   function showAllPatient(){
    //fetch data from database
        $data=  DB::table('patients')->get();
        //pass data to view page name variable data
        return view ('admin/patientinfo',compact('data'));
   }

   function checkDekuRisiko($f_code,$patinfo){
      $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
      return view ('admin/braden-skala',compact('f_code','patinfo'));
     }
     function showReport($f_code, $patinfo){
      //fetch data from database
          $reports=  DB::table('reports')->where('f_code', $f_code)->get();
          $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
          //pass data to view page name variable data
          return view ('admin/report',compact('f_code','patinfo','reports'));
     }
  
}
