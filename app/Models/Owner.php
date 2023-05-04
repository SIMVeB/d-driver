<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'birthDate',
        'birthPlace',
        'profession',
        'personality',
        'email',
        'phoneNumber',
        'passport',
        'zip',
        'nif',
        'district',
        'address',
        'village',
        'commune',
        'region'
    ];
}
