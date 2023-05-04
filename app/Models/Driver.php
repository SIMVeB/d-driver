<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'birthDate',
        'birthPlace',
        'email',
        'phoneNumber',
        'passport',
        'zip',
        'district',
        'nif',
        'address',
        'village',
        'commune',
        'region',
        "permis"
    ];
}
