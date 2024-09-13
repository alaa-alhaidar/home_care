<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request) {
        // Validate the input fields
        $incomingFields = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'admin' => 'required|in:0,1'
        ]);
    
        // Retrieve the user by name
        $user = \App\Models\User::where('name', $incomingFields['name'])->first();
    
        // Check if user exists and verify the password
        if ($user && Hash::check($incomingFields['password'], $user->password)) {
            auth()->login($user);
            $request->session()->regenerate();
    
            // Check if the logged-in user is an admin from the database
            if (auth()->user()->admin == 1) { // User is an admin in the database
                // Check what was selected in the form for 'admin'
                if ($incomingFields['admin'] == 1) {
                    // User is admin and selected 1 in the form, show admin interface
                    $users = DB::table('users')->get();
                    $patinfo = DB::table('patients')->get();
                    return view('admin/users', compact('users','patinfo'));
                } else {
                    // User is admin but selected 0 in the form, show patient info
                    $patinfo = DB::table('patients')->get();
                    return view('admin/patientinfo', compact('patinfo'));
                }
            } else {
                // User is not admin in the database, show patient info regardless of form input
                $patinfo = DB::table('patients')->get();
                return view('admin/patientinfo', compact('patinfo'));
            }
        } else {
            // Authentication failed, return to login view with an error
            return view('admin/login');
        }
    }
    
    
    public function add_usr(Request $request){
        
        return view('admin/add-user');
    }
    public function insert_usr(Request $request){
     

        $hashedPassword = Hash::make($request->input('password'));
        DB::table('users')->insert([
          
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $hashedPassword,
            'admin' => $request->input('admin'),
            
        ]);
        
        return view('admin/home');
    }

    function showAllUsers(){
        $users = DB::table('users')->get();
       
       return view ('admin/users',compact('users'));
    }


    

    public function logout() {
        auth()->logout();
        return redirect('admin/home');
    }
    public function goHome() {
      
        return redirect('admin/home');
    }
    public function gologin(Request $request) {
      
        return view('admin/login');
    }

    public function goCode(Request $request) {

        return view('admin/f_code');
    }
 
}