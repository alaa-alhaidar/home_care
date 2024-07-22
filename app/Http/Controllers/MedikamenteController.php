<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedikamenteController extends Controller{

    function showAllMed($f_code){
        $medi = DB::table('medikaments')->where('f_code', $f_code)->get();
        $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
        $userinfo = DB::table('patients')->where('f_code', $f_code)->get();
       return view ('admin/medikamente',compact('medi','patinfo'));
    }
    function showAllMedPat($f_code){
        $medi = DB::table('medikaments')->where('f_code', $f_code)->get();
        $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
        $userinfo = DB::table('patients')->where('f_code', $f_code)->get();
       return view ('patient/medikamente',compact('medi','patinfo'));
    }

    public function logout(Request $request){
    // Logout logic here
    
    return redirect('/'); // Redirect to the home page
}

public function govital($f_code){
    $vital = DB::table('vitalzeichens')->where('f_code', $f_code)->take(10)->get();
    $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
    $userinfo = DB::table('patients')->where('f_code', $f_code)->get();
    
    return view ('admin/patientencheck',compact('vital','patinfo'));
}   
    public function addMed($f_code){
   
    $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
    return view ('admin/add-medikamente',compact('patinfo'));
}  
public function insertMed($f_code,$patinfo, Request $request){
   
    DB::table('medikaments')->insert([
        'f_code' => $f_code,
        'name' => $request->input('name'),
        'wirkstoff' => $request->input('wirkstoff'),
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
public function deleteMed($f_code,$patinfo,$id){

    $toDelete = DB::table('medikaments')->where('id', $id)->delete();
    $medi = DB::table('medikaments')->where('f_code', $f_code)->get();
    $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
    
    return view ('admin/medikamente',compact('medi','patinfo'));
} 
    
   
}
