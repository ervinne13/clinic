<?php

namespace App\Modules\ChildHealthRecord\Repository;

use App\Modules\ChildHealthRecord\ChildHealthRecord;
use Illuminate\Http\Request;

/**
 *
 * @author Ervinne Sodusta
 */
interface ChildHealthRecordRepository
{

    function saveFromRequest(ChildHealthRecord $childHealthRecord, Request $request);
}
