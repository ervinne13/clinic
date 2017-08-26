<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildHealthRecordTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_health_record', function (Blueprint $table) {
            $table->string('document_number', 30)->primary();
            $table->date('document_date');

            //  Basic Information
            $table->string("last_name", 100);
            $table->string("middle_name", 100)->nullable();
            $table->string("first_name", 100);

            $table->string("gender_code", 2)
                ->nullable()
                ->comment("(M)ale or (F)emale");

            $table->date("birth_date")->nullable();
            $table->string("contact")->nullable();
            $table->string("fathers_name", 200)->nullable();
            $table->string("mothers_name", 200)->nullable();
            $table->text("address")->nullable();

            //  Birth History
            $table->string("birth_term_code")
                ->nullable()
                ->comment("Early Term, between 37 weeks and 38 weeks 6 days. "
                    . "Full Term, between 39 weeks and 40 weeks 6 days. "
                    . "Late Term, the 41st week. "
                    . "Post Term, after 42 weeks.");

            $table->integer("no_of_months")->nullable();
            $table->integer("no_of_weeks")->nullable();
            $table->integer("no_of_days")->nullable();

            $table->string("delivery_type", 100)
                ->nullable()
                ->comment("Vaginal Birth, Natural Birth, Scheduled Cesarean, "
                    . "Unplanned Cesarean, Vaginal Birth after C-Section (VBAC), "
                    . "Scheduled Induction");

            $table->decimal("birth_weight")->nullable();
            $table->decimal("birth_length")->nullable();
            $table->decimal("head_circumference")->nullable();
            $table->decimal("chest_circumference")->nullable();
            $table->decimal("abdominal_circumference")->nullable();

            $table->string("blood_type", 2)
                ->nullable()
                ->comment("Type and RH Factor (postive or negative). Ex. O+ or O-");

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
        Schema::dropIfExists('child_health_record');
    }

}
