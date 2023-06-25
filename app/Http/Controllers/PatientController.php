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
   function checkDekuRisiko($vers,$patinfo){
      $patinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
      return view ('admin/braden-skala',compact('vers','patinfo'));
     }
  
}
