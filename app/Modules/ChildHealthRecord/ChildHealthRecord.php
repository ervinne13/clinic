<?php

namespace App\Modules\ChildHealthRecord;

use Illuminate\Database\Eloquent\Model;

class ChildHealthRecord extends Model
{

    const NUMBER_SERIES_CODE = "CHR";
    
    public $incrementing  = false;
    protected $table      = "child_health_record";
    protected $primaryKey = "document_number";
    protected $fillable   = [
        "document_number",
        "document_date",
        "last_name",
        "middle_name",
        "first_name",
        "gender_code",
        "birth_date",
        "contact",
        "fathers_name",
        "mothers_name",
        "address",
        "birth_term_code",
        "no_of_months",
        "no_of_weeks",
        "no_of_days",
        "delivery_type",
        "birth_weight",
        "birth_length",
        "head_circumference",
        "chest_circumference",
        "abdominal_circumference",
        "blood_type",
    ];

}
