<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Faq extends Model
{
    use HasFactory, Sortable;

    protected $fillable = [
    'quiz',
    'answer',
    'status'
    ];

    public $sortable = [
    'quiz',
    'answer',
    'status',
    "created_at",
    ];
}
