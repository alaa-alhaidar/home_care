<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VitalController extends Controller
{
    public function insertCheck($vers,$patinfo, Request $request){
        
        $g = 1.7;

        $bmi=intval($request->input('gewicht'))/($g)^2;
        DB::table('vitalzeichens')->insert([
                'versicherungsnummer' => $vers,
                'rr_systolisch' => $request->input('rr_systolisch'),
                'rr_diastolisch' => $request->input('rr_diastolisch'),
                'puls' => $request->input('puls'),
                'temp' => $request->input('temp'),
                'gewicht' => $request->input('gewicht'),
                'bmi' => $bmi
            
            
        ]);
        $data=  DB::table('patients')->get();
        $patinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
        
        $vital = DB::table('vitalzeichens')->where('versicherungsnummer', $vers)->get();
       
        return view ('admin/patientinfo',compact('data'));
    }
    use Illuminate\Support\Facades\Response;

public function saveJson($vers)
{
   
    $vital = DB::table('vitalzeichens')->where('versicherungsnummer', $vers)->get();
    $jsonData = json_encode(vital);

    $fileName = 'yourVitalzeichen.json';

    $headers = [
        'Content-type' => 'application/json',
        'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
    ];


    return Response::make($jsonData, 200, $headers);
}

}
