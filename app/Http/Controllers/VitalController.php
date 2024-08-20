<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\VitalController;


class VitalController extends Controller
{
    public function addcheck($f_code){
   
        $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
        return view ('admin/add-check',compact('patinfo'));
    }
    
    public function insertCheck($f_code, Request $request)
{
    // Calculate BMI
    $g = 1.7;
    $bmi = intval($request->input('gewicht')) / ($g * $g); // Fix the calculation of BMI

    // Insert new vital signs data
    DB::table('vitalzeichens')->insert([
        'versicherungsnummer' => $f_code,
        'f_code' => $f_code,
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
    $patinfo = DB::table('patients')->where('f_code', $f_code)->get();

    // Retrieve latest 5 vital signs entries
    $vital = DB::table('vitalzeichens')
                ->where('f_code', $f_code)
                ->orderBy('created_time', 'desc')
                ->take(5)
                ->get();
   
    // Pass data to the view
    return view('admin.patientencheck', compact('patinfo', 'vital'));
}
public function deleteCheck($f_code,$id){

    $toDelete = DB::table('vitalzeichens')->where('id', $id)->delete();
    $vital = DB::table('vitalzeichens')->where('f_code', $f_code)->get();
    $patinfo = DB::table('patients')->where('f_code', $f_code)->get();
    
    return view ('admin/patientencheck',compact('vital','patinfo'));
} 

    

public function saveJson($vers)
{
   
    $vital = DB::table('vitalzeichens')->where('f_code', $vers)->get();
    $jsonData = json_encode(vital);

    $fileName = 'yourVitalzeichen.json';

    $headers = [
        'Content-type' => 'application/json',
        'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
    ];


    return Response::make($jsonData, 200, $headers);
}
public function saveVitalData(Request $request)
    {
        $vitalData = $request->input('vital');
        $jsonData = json_encode($vitalData, JSON_PRETTY_PRINT);

        // Get the current user's home directory
       
        // Set the path to the Desktop
        $path = 'Users/alaa/Desktop/Herr_S/yourVitalzeichens.json';

        // Save the file to the Desktop
        file_put_contents($path, $jsonData);

        return response()->json(['success' => true, 'path' => $path]);
    }
    public function sendVitalPDF(Request $request)
    {
        try {
            if ($request->hasFile('pdf')) {
                $pdf = $request->file('pdf');
                $path = $pdf->storeAs('vital_data', 'yourVitalzeichens.pdf');

                // Send the email with the PDF attachment
                Mail::to('alaa.alhaidar@hotmail.com')->send(new VitalPDFMail($path));

                return response()->json(['success' => true, 'message' => 'PDF sent successfully']);
            } else {
                throw new \Exception('No PDF file found in the request.');
            }
        } catch (\Exception $e) {
            \Log::error('Error sending PDF: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

}