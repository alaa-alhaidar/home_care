<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MassnahmenController extends Controller
{
    function showAllDekubitusProhpylaxen($f_code){
        $currentTime = now();
        $sechs = now()->setTime(6, 0, 0); // Set the time to 6:00 AM

        if ($currentTime < $sechs) {
        DB::table('dekubitus')->update(['status' => 0]);
    }
        $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
        $dekuProph = DB::table('dekubitus')->where('f_code', $f_code)->get();
       return view ('admin/view-prophylaxen',compact('dekuProph','patinfo'));
    }
    
    function showDeku($vers){
       
        $patinfo = DB::table('patients')->where('f_code', $vers)->get();
        $dekuProph = DB::table('dekubitus')->where('f_code', $vers)->get();
       return view ('admin/dekubitus',compact('dekuProph','patinfo'));
    }
    function dekuRisiko($vers){
       
        $patinfo = DB::table('patients')->where('f_code', $vers)->get();
        
       return view ('admin/braden-skala',compact('f_code','patinfo'));
    }
  
}
