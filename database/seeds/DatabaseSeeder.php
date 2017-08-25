<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DefaultUsersSeeder::class);
        $this->call(VaccinesSeeder::class);
        $this->call(StartingVaccineStockSeeder::class);
        $this->call(NumberSeriesSeeder::class);
    }

}
