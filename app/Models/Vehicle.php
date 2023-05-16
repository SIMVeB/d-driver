<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kyslik\ColumnSortable\Sortable;


class Vehicle extends Model
{

    use HasFactory, Sortable;

    public $sortable = [
    'genre',
    'manufacturer',
    'chassis',
    'bodywork',
    'type',
    'owner_id',
    'driver_id',
    "created_at",
    ];

    protected $fillable = [
        'genre',
        'manufacturer',
        'chassis',
        'bodywork',
        'serialNumber',
        'bodyworkColor',
        'energy',
        'sitePlace',
        'vin',
        'circulationDate',
        'usageState',
        'power',
        'registrationDate',
        'firstUseDate',
        'airConditioner',
        // 'dateOfManufacturer',
        'glassType',
        'frontShape',
        'backShape',
        'type',
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

}
