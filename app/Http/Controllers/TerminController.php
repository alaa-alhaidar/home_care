<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TerminController extends Controller
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
    $termine = DB::table('termine')
                ->where('f_code', $f_code)
                ->orderBy('created_time', 'desc')
                ->take(10)
                ->get();
   
    // Pass data to the view
    return view('admin/termine', compact('patinfo', 'termine','f_code'));
}

public function deleteTermine($f_code,$id){

    $toDelete = DB::table('termine')->where('id', $id)->delete();
    $termine = DB::table('termine')->where('f_code', $f_code)->get();
    $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
    
    return view ('admin/patientinfo',compact('vital','patinfo'));
} 


    function showAllTermine($f_code){
       
      
            $termine = DB::table('termine')
            ->where('f_code', $f_code)
            ->orderBy('created_time', 'asc')
            ->take(10)
            ->get();
    
        $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
      
       return view ('admin/termine',compact('termine','patinfo','f_code'));
    }
    
 
  
}
