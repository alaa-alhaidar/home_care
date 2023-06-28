<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MassnahmenController extends Controller
{
    function showAllDekubitusProhpylaxen($vers){
        $currentTime = now();
        $sixAM = now()->setTime(6, 0, 0); // Set the time to 6:00 AM

        if ($currentTime < $sixAM) {
        DB::table('dekubitus')->update(['status' => 0]);
    }
        $patinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
        $dekuProph = DB::table('dekubitus')->where('versicherungsnummer', $vers)->get();
       return view ('admin/view-prophylaxen',compact('dekuProph','patinfo'));
    }
    function showDeku($vers){
       
        $patinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
        $dekuProph = DB::table('dekubitus')->where('versicherungsnummer', $vers)->get();
       return view ('admin/dekubitus',compact('dekuProph','patinfo'));
    }
    function dekuRisiko($vers){
       
        $patinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
        
       return view ('admin/braden-skala',compact('vers','patinfo'));
    }
  
}
