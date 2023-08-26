<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

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
 
 
}
