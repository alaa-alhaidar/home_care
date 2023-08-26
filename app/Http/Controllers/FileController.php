<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import the Storage facade

class FileController extends Controller
{
    public function saveJson(Request $request)
    {
        $filePath = 'data.json';
        $json_data = $request->getContent(); // Get JSON data from the request

        if (!empty($json_data)) {
            // Save the JSON data to the file
            Storage::disk('local')->put($filePath, $json_data);

            return response()->json(['message' => 'JSON data saved successfully']);
        } else {
            return response()->json(['message' => 'Failed to save JSON data'], 400);
        }
    }
}
