<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccinePriceTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_price', function (Blueprint $table)
        {
            $table->string('brand_name', 100)->primary();
            $table->string('generic_name', 100);
            $table->string('status', 100)->comment("Available/Out of Stock");
            $table->decimal('unit_cost_from');
            $table->decimal('unit_cost_to');
            $table->decimal('doctor_selling_price');
            $table->decimal('patient_selling_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccine_price');
    }

}
