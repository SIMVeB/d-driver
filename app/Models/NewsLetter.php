<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class NewsLetter extends Model
{
    use HasFactory, Sortable;

    public $sortable = [
    'email',
    "created_at",
    ];

    protected $fillable = [
    'email',
    ];
}
