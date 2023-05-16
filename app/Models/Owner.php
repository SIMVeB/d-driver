<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Owner extends Model
{
    use HasFactory, Sortable;

    public $sortable = [
    'name',
    'birthDate',
    'birthPlace',
    'phoneNumber',
    'email',
    "created_at",
    ];

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
