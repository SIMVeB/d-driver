<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Driver extends Model
{
    use HasFactory, Sortable;

    public $sortable = [
    'name',
    'birthDate',
    'birthPlace',
    'phoneNumber',
    'permis',
    "created_at",
    ];

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
