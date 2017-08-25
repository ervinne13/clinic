<?php

use App\Modules\Clinic\Vaccine\Vaccine;
use Illuminate\Database\Seeder;

class VaccinesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $vaccines = [
            "BCG",
            "Hepatitis B",
            "DTwP / DTap",
            "OPV / IPV",
            "Measles",
            "H. influenza type B",
            "Pneumococcal Conjugate Vaccine, 13 - valent (PCV-13)",
            "Rotavirus",
            "Influenza",
            "Varicella",
            "MMR",
            "Hepatitis A",
            "Typhoid",
        ];

        foreach ( $vaccines AS $vaccineName ) {
            $vaccine               = new Vaccine();
            $vaccine->vaccine_name = $vaccineName;
            $vaccine->save();
        }
    }

}
