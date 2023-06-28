<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patientcheck extends Model
{
    use HasFactory;
    protected $fillable = ['rr_systolisch', 'rr_diastolisch', 'puls'
    , 'temp', 'gewicht', 'bmi', 'versicherungsnummer'
];
}
