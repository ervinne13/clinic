<?php

namespace App\Modules\System\NumberSeries;

use Illuminate\Database\Eloquent\Model;

class NumberSeries extends Model
{

    public $incrementing  = false;
    protected $table      = "number_series";
    protected $primaryKey = "code";
    protected $fillable   = [
        "code",
        "year_prefix_format",
        "uses_code_as_prefix",
        "starting_number",
        "ending_number",
        "last_number_used"
    ];

    public function scopeCode($query, $code)
    {
        return $query->where("code", $code);
    }

}
