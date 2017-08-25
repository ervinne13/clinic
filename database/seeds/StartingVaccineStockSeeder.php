<?php

use App\Modules\Clinic\Vaccine\VaccinePrice;
use Illuminate\Database\Seeder;

class StartingVaccineStockSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $vaccinePrices = [
                ["HAVRIZ JR.", "Hepatitis A", 772, 773, 900, 0],
                ["AVAXIM.", "Hepatitis A", 760, 1130, 900, 2000],
                ["BCG.", "BCG", 0, 0, 500, 1500],
        ];

        foreach ( $vaccinePrices AS $vaccinePriceTemplate ) {

            $vaccinePrice                        = new VaccinePrice();
            $vaccinePrice->brand_name            = $vaccinePriceTemplate[0];
            $vaccinePrice->generic_name          = $vaccinePriceTemplate[1];
            $vaccinePrice->status                = "Available";
            $vaccinePrice->unit_cost_from        = $vaccinePriceTemplate[2];
            $vaccinePrice->unit_cost_to          = $vaccinePriceTemplate[3];
            $vaccinePrice->doctor_selling_price  = $vaccinePriceTemplate[4];
            $vaccinePrice->patient_selling_price = $vaccinePriceTemplate[5];

            $vaccinePrice->save();
        }
    }

}
