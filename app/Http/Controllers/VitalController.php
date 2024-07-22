<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\VitalController;


class VitalController extends Controller
{
    public function insertCheck($vers, $patinfo, Request $request)
{
    // Calculate BMI
    $g = 1.7;
    $bmi = intval($request->input('gewicht')) / ($g * $g); // Fix the calculation of BMI

    // Insert new vital signs data
    DB::table('vitalzeichens')->insert([
        'versicherungsnummer' => $vers,
        'f_code' => $vers,
        'rr_systolisch' => $request->input('rr_systolisch'),
        'rr_diastolisch' => $request->input('rr_diastolisch'),
        'puls' => $request->input('puls'),
        'temp' => $request->input('temp'),
        'gewicht' => $request->input('gewicht'),
        'bmi' => intval($request->input('gewicht')) / ($g * $g), // Fix the calculation of BMI
        'created_time' => now(), // Assuming 'created_at' is automatically set or you can set it here
        'updated_time' => now(), // Assuming 'created_at' is automatically set or you can set it here
    ]);
    

    // Retrieve patient information (assuming $patinfo is already provided or retrieved)
    $patinfo = DB::table('patients')->where('versicherungsnummer', $vers)->first();

    // Retrieve latest 5 vital signs entries
    $vital = DB::table('vitalzeichens')
                ->where('versicherungsnummer', $vers)
                ->orderBy('created_time', 'desc')
                ->take(5)
                ->get();

    // Pass data to the view
    return view('admin.patientencheck', compact('patinfo', 'vital'));
}

    

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
