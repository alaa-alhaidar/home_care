<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MassnahmenController extends Controller
{

    public function addMassnahme($f_code){
   
        $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
        return view ('admin/add-massnahme',compact('patinfo'));
    }
    
    public function insertMassnahme($f_code, Request $request)
{
    

    // Insert new vital signs data
    DB::table('massnahmen')->insert([
       
        'f_code' => $f_code,
        'to_do' => $request->input('to_do'),

    ]);
    

    // Retrieve patient information (assuming $patinfo is already provided or retrieved)
    $patinfo = DB::table('patients')->where('f_code', $f_code)->get();

    // Retrieve latest 5 vital signs entries
    $massnahmen = DB::table('massnahmen')
                ->where('f_code', $f_code)
                ->orderBy('created_time', 'desc')
                ->take(10)
                ->get();
   
    // Pass data to the view
    return view('admin/massnahmen', compact('patinfo', 'massnahmen','f_code'));
}

public function deleteMassnahme($f_code,$id){

    $toDelete = DB::table('massnahmen')->where('id', $id)->delete();
    $massnahmen = DB::table('massnahmen')->where('f_code', $f_code)->get();
    $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
    
    return view ('admin/massnahmen',compact('vital','patinfo'));
} 


    function showAllProhpylaxen($f_code){
        $currentTime = now();
        $sechs = now()->setTime(6, 0, 0); // Set the time to 6:00 AM

        if ($currentTime < $sechs) {
        DB::table('massnahmen')->update(['status' => 0]);
    }
        $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
        $massnahmen = DB::table('massnahmen')->where('f_code', $f_code)->get();
       return view ('admin/massnahmen',compact('massnahmen','patinfo','f_code'));
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
