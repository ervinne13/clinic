<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumberSeriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('number_series', function (Blueprint $table)
        {
            $table->string('code', 30)->primary();
            $table->string("year_prefix_format", 30)->nullable();
            $table->boolean("uses_code_as_prefix")->default(true);
            $table->integer('starting_number')->default(0);
            $table->integer('ending_number')->default(9999);
            $table->integer('last_number_used')->default(0);
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
        Schema::dropIfExists('number_series');
    }

}
