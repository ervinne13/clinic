<?php

namespace App\Modules\ChildHealthRecord\Repository\Impl;

use App\Modules\ChildHealthRecord\ChildHealthRecord;
use App\Modules\ChildHealthRecord\Repository\ChildHealthRecordRepository;
use App\Modules\System\NumberSeries\Repository\NumberSeriesRepository;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Description of ChildHealthRecordRepositoryDefaultImpl
 *
 * @author Ervinne Sodusta
 */
class ChildHealthRecordRepositoryDefaultImpl implements ChildHealthRecordRepository
{

    /**
     *
     * @var NumberSeriesRepository 
     */
    protected $NSRepo;

    public function __construct(NumberSeriesRepository $NSRepo)
    {
        $this->NSRepo = $NSRepo;
    }

    public function saveFromRequest(ChildHealthRecord $childHealthRecord, Request $request)
    {

        try {
            DB::beginTransaction();
            $childHealthRecord->fill($request->toArray());

            $childHealthRecord->birth_date = Carbon::createFromFormat('m/d/Y', $childHealthRecord->birth_date);

            if ( !$childHealthRecord->document_date ) {
                $childHealthRecord->document_date = Carbon::now();
            }

            //  if the next number matches (meaning it was not modified in the form)
            //  claim the number
            $nextAvailableNumber = $this->NSRepo->getNextAvailableNumber(ChildHealthRecord::NUMBER_SERIES_CODE);
            if ( $nextAvailableNumber == $childHealthRecord->document_number ) {
                $childHealthRecord->document_number = $this->NSRepo->claimNextAvailableNumber(ChildHealthRecord::NUMBER_SERIES_CODE);
            }

            $childHealthRecord->save();
            DB::commit();

            return $childHealthRecord;
        } catch ( Exception $ex ) {
            DB::rollBack();
            throw $ex;
        }
    }

}
