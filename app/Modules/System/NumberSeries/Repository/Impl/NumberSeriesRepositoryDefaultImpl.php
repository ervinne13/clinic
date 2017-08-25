<?php

namespace App\Modules\System\NumberSeries\Repository;

use App\Modules\System\NumberSeries\Exception\NumberSeriesGenerationFailedException;
use App\Modules\System\NumberSeries\NumberSeries;
use App\Modules\System\NumberSeries\Repository\NumberSeriesRepository;

/**
 * Description of NumberSeriesRepositoryDefaultImpl
 *
 * @author Ervinne Sodusta
 */
class NumberSeriesRepositoryDefaultImpl implements NumberSeriesRepository
{

    public function claimNextAvailableNumber($NSCode)
    {
        $numberSeries        = $this->lookupNumberSeriesUsingCode($NSCode);
        $nextAvailableNumber = $this->getNextAvailableNumber($NSCode);

        $numberSeries->last_number_used ++;
        $numberSeries->save();

        return $nextAvailableNumber;
    }

    public function getNextAvailableNumber($NSCode)
    {
        $numberSeries = $this->lookupNumberSeriesUsingCode($NSCode);
        $this->validateNextNumberSeries($numberSeries);

        //  build the number series
        $nextNumber      = $numberSeries->last_number_used + 1;
        $generatedNumber = $numberSeries->uses_code_as_prefix ? $numberSeries->code . "-" : "";

        if ( $numberSeries->year_prefix_format ) {
            $generatedNumber .= date($numberSeries->year_prefix_format) . "-";
        }

        $paddedNextNumber = str_pad($nextNumber, strlen($numberSeries->ending_number), "0", STR_PAD_LEFT);
        $generatedNumber  .= $paddedNextNumber;

        return $generatedNumber;
    }

    public function claimNumberSeriesNumber($NSCode, $NSNumber)
    {
        throw new Exception("Not yet implemented");
    }

    protected function validateNextNumberSeries(NumberSeries $numberSeries)
    {
        if ( $numberSeries->last_number_used >= $numberSeries->ending_number ) {
            throw new NumberSeriesGenerationFailedException("Number series exceeds the ending number");
        }
    }

    protected function lookupNumberSeriesUsingCode($NSCode)
    {
        return NumberSeries::code($NSCode)->firstOrFail();
    }

}
