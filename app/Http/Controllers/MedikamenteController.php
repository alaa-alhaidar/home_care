<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedikamenteController extends Controller{

    function showAllMed($vers){
        $medi = DB::table('medikaments')->where('versicherungsnummer', $vers)->get();
        $patinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
        $userinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
       return view ('admin/medikamente',compact('medi','patinfo'));
    }
    function showAllMedPat($vers){
        $medi = DB::table('medikaments')->where('versicherungsnummer', $vers)->get();
        $patinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
        $userinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
       return view ('patient/medikamente',compact('medi','patinfo'));
    }

    public function logout(Request $request){
    // Logout logic here
    
    return redirect('/'); // Redirect to the home page
}

public function govital($vers){
    $vital = DB::table('vitalzeichens')->where('versicherungsnummer', $vers)->get();
    $patinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
    $userinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
    
    return view ('admin/patientencheck',compact('vital','patinfo'));
}   
    public function addMed($vers){
   
    $patinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
    return view ('admin/add-medikamente',compact('patinfo'));
}  
public function insertMed($vers,$patinfo, Request $request){
   
    DB::table('medikaments')->insert([
        'versicherungsnummer' => $vers,
        'name' => $request->input('name'),
        'applikationsform' => $request->input('applikationsform'),
        'morgen' => $request->input('morgen'),
        'nachmittag' => $request->input('nachmittag'),
        'abend' => $request->input('abend'),
        'nachts' => $request->input('nachts'),
        'hinweis' => $request->input('hinweis'),
        'Haupt_Bedarf' => $request->input('Haupt_Bedarf')
    ]);
    $data=  DB::table('patients')->get();
    return view ('admin/patientinfo',compact('data'));
} 
    
   
}
