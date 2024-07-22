<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MassnahmenController extends Controller
{
    function showAllProhpylaxen($f_code){
        $currentTime = now();
        $sechs = now()->setTime(6, 0, 0); // Set the time to 6:00 AM

        if ($currentTime < $sechs) {
        DB::table('massnahmen')->update(['status' => 0]);
    }
        $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
        $all_prophylaxen = DB::table('massnahmen')->where('f_code', $f_code)->get();
       return view ('admin/massnahmen',compact('all_prophylaxen','patinfo','f_code'));
    }
    
    function showDeku($vers){
       
        $patinfo = DB::table('patients')->where('f_code', $vers)->get();
        $dekuProph = DB::table('massnahmen')->where('f_code', $vers)->get();
       return view ('admin/massnahmen',compact('dekuProph','patinfo','f_code'));
    }
    function dekuRisiko($vers){
       
        $patinfo = DB::table('patients')->where('f_code', $vers)->get();
        
       return view ('admin/braden-skala',compact('f_code','patinfo'));
    }
  
}
