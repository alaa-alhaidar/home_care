<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medikamente extends Model
{
    use HasFactory;
    protected $fillable = ['vorname', 'nachname', 'geschlecht'
    , 'geburtstag', 'adresse', 'pflegegrad', 'grosse', 'versicherungsnummer', 'kontakt' , 'aufnahmedatum'
];
}
