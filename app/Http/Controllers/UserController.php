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
            
            $user=  DB::table('users')->where('name',$incomingFields['name'])->first();
            
            if($user->name==$incomingFields['name']&&$user->role=='admin'){
                $data=  DB::table('patients')->get();
                return view ('admin/patientinfo',compact('data'));

            }else if($user->name==$incomingFields['name']&&$user->role=='patient'){
                $data=  DB::table('patients')->where('f_code',$user->f_code)->get();
                return view ('patient/patientinfo',compact('data'));
            }
            
        }else{
            
            return view('login');
        }

        
    }
    public function kontoErstellen(Request $request){
        $hashedPassword = Hash::make($request->input('password'));
        DB::table('users')->insert([
            'f_code' => $request->input('f_code'),
            'name' => $request->input('name'),
            'password' => $hashedPassword,
            'f_code' => $request->input('f_code'),
            'role' => "patient"
            
            
        ]);
        DB::table('patients')->insert([
            'f_code' => $request->input('f_code'),
            'grosse' => $request->input('grosse'),
            'geburtstag' => $request->input('geburtstag'),
            'geschlecht' => $request->input('geschlecht'),
            'pflegegrad' => $request->input('pflegegrad')
            
        ]);
        
        return view('login');
    }


    

    public function logout() {
        auth()->logout();
        return redirect('/home');
    }
    public function goHome() {
      
        return redirect('/home');
    }
    public function gologin(Request $request) {
      
        return view('login');
    }
    public function goCode(Request $request) {

        return view('f_code');
    }
 
}
