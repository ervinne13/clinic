<?php

use App\Modules\System\NumberSeries\NumberSeries;
use Illuminate\Database\Seeder;

class NumberSeriesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberSeries = new NumberSeries();

        $numberSeries->code                = "CHR";
        $numberSeries->year_prefix_format  = "y";       //  last 2 digits of the current year
        $numberSeries->uses_code_as_prefix = false;     //  use year only
        $numberSeries->starting_number     = 0;
        $numberSeries->ending_number       = 9999;
        $numberSeries->last_number_used    = 0;

        $numberSeries->save();
    }

}
