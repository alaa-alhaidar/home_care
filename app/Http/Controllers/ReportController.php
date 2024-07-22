<?php

namespace App\Http\Controllers;

use view;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller{

  
    function showAllReport($f_code){
        $reports = DB::table('reports')->where('f_code', $f_code)->get();
        $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
        $userinfo = DB::table('patients')->where('f_code', $f_code)->get();
       return view ('admin/report',compact('patinfo','reports'));
    }

    public function logout(Request $request){
    // Logout logic here
    
    return redirect('/'); // Redirect to the home page
}

public function addReport($f_code){
   
    $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
    return view ('admin/add-report',compact('patinfo'));
}

public function insertReport($f_code,$patinfo, Request $request){
   
    DB::table('reports')->insert([
        'f_code' => $f_code,
        'text' => $request->input('text'),
        
    ]);
    $reports = DB::table('reports')->where('f_code', $f_code)->orderBy('created_time', 'desc')
    ->take(30)
    ->get();
    $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
    $data=  DB::table('patients')->get();
    return view ('admin/report',compact('data','patinfo','reports'));
} 
public function deleteReport($f_code,$patinfo,$id){

    $toDelete = DB::table('medikaments')->where('id', $id)->delete();
    $medi = DB::table('medikaments')->where('f_code', $f_code)->get();
    $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
    
    return view ('admin/medikamente',compact('medi','patinfo'));
} 
    
   
}
