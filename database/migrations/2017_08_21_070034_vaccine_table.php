<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VaccineTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('vaccine', function (Blueprint $table) {
            $table->string('vaccine_name', 100)->primary();
            $table->integer('recommended_dose_count')->default(0);
            $table->integer('recommended_booster_dose_count')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('vaccine');
    }

}
