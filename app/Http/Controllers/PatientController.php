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
        $patinfo=  DB::table('patients')->get();
        //pass data to view page name variable data
        return view ('admin/patientinfo',compact('patinfo'));
   }

   function checkDekuRisiko($f_code){
      $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
      return view ('admin/braden-skala',compact('f_code','patinfo'));
     }
     function showReport($f_code){
      //fetch data from database
      $reports = DB::table('reports')->where('f_code', $f_code)
      ->orderBy('created_time', 'desc')
      ->take(50)
      ->get();
          $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
          //pass data to view page name variable data
          return view ('admin/report',compact('f_code','patinfo','reports'));
     }
     function showPatPerID($f_code){
          //fetch data from database
          $user=  DB::table('users')->get();
          $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
              //pass data to view page name variable data
          return view ('patient/patientinfo',compact('f_code','patinfo','user'));
         }
         public function addpat($f_code){
   
            $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
            return view ('admin/add-pat',compact('patinfo'));
        } 
         public function insertPat($f_code, Request $request){
   
            DB::table('patients')->insert([
                'f_code' => $request->input('f_code'),
                'vorname' => $request->input('vorname'),
                'nachname' => $request->input('nachname'),
                'geschlecht' => $request->input('geschlecht'),
                'geburtstag' => $request->input('geburtstag'),
                'adresse' => $request->input('adresse'),
                'pflegegrad' => $request->input('pflegegrad'),
                'grosse' => $request->input('grosse'),
                'f_code' => $request->input('f_code'),
                'kontakt' => $request->input('kontakt'),
                'aufnahmedatum' => $request->input('aufnahmedatum')
                
               
            ]);
            $patinfo = DB::table('patients')->get();
            $data=  DB::table('patients')->get();
         
            return view ('admin/patientinfo',compact('data','patinfo','f_code'));
        }
}
