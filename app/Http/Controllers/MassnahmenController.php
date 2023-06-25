<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MassnahmenController extends Controller
{
    function showAllDekubitusProhpylaxen($vers){
       
        $patinfo = DB::table('patients')->where('versicherungsnummer', $vers)->get();
        $dekuProph = DB::table('dekubitus')->where('versicherungsnummer', $vers)->get();
       return view ('admin/view-prophylaxen',compact('dekuProphy','patinfo'));
    }
}
