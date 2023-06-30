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

        if (auth()->attempt(['name' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
       
        }
        $data=  DB::table('patients')->get();
        return view ('admin/patientinfo',compact('data'));
    }

    public function logout() {
        auth()->logout();
        return redirect('/home');
    }
    public function goHome() {
      
        return redirect('/home');
    }
 
}
