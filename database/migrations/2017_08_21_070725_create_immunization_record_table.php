<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImmunizationRecordTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('immunization_record', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('chr_document_number', 30);
            $table->date('immunization_date');
            $table->string('vaccine', 100);
            $table->string('vaccine_brand', 100);
            $table->string('dose_type_code', 3)
                    ->comment("1st, 2nd, 3rd, b1, b2, b3 - b stands for Booster");

            $table->text('reaction')->nullable();

            $table->foreign('chr_document_number')
                    ->references('document_number')
                    ->on('child_health_record');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('immunization_record');
    }

}
