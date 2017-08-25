<?php

namespace App\Modules\Clinic\Vaccine;

use Illuminate\Database\Eloquent\Model;

class VaccinePrice extends Model
{

    public $incrementing  = false;
    protected $table      = "vaccine_price";
    protected $primaryKey = "brand_name";
    protected $fillable   = [
        "brand_name", "generic_name", "status", "unit_cost"
    ];

}
