<?php

namespace App\Modules\System\NumberSeries\Repository;

/**
 *
 * @author Ervinne Sodusta
 */
interface NumberSeriesRepository
{

    function getNextAvailableNumber($NSCode);

    function claimNextAvailableNumber($NSCode);
    
    function claimNumberSeriesNumber($NSCode, $NSNumber);
}
