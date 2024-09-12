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
        
        $incomingFields = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt(['name' => $incomingFields['name'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();
        
    
            $patinfo=  DB::table('patients')->get();
            return view('admin/patientinfo', compact('patinfo'));
            
            
        }else{
            
            return view ('admin/login');
          
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
            
        ]);
        
        return view('admin/home');
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
