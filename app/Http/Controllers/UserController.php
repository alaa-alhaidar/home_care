<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login(Request $request) {
        
        $incomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt(['email' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
            
            $user=  DB::table('users')->where('email',$incomingFields['loginname'])->first();
            
            if($user->email==$incomingFields['loginname']&&$user->role=='admin'){
                $data=  DB::table('patients')->get();
                return view ('admin/patientinfo',compact('data'));
            }else if($user->email==$incomingFields['loginname']&&$user->role=='patient'){
                $data=  DB::table('patients')->where('versicherungsnummer',$user->versicherungsnummer)->get();
                return view ('patient/patientinfo',compact('data'));
            }
            
        }else{
            
            return redirect('/home');
        }

        
    }
    public function insertMed($vers,$patinfo, Request $request){
   
        DB::table('medikaments')->insert([
            'versicherungsnummer' => $vers,
            'name' => $request->input('name'),
            'applikationsform' => $request->input('applikationsform'),
            'morgen' => $request->input('morgen'),
            'nachmittag' => $request->input('nachmittag')
           
        ]);
        $data=  DB::table('patients')->get();
        return view ('admin/patientinfo',compact('data'));
    } 
        
       
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
