<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{


    use HasFactory;

    protected $fillable = [
        'genre',
        'manufacturer',
        'chassis',
        'bodywork',
        'serialNumber',
        'bodyworkNumber',
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
        $this->belongsTo(Owner::class);
    }

    public function driver()
    {
        $this->belongsTo(Driver::class);
    }

}
