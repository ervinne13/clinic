<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosisTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('diagnosis', function (Blueprint $table) {
            $table->date('diagnosis_date')->primary();
            $table->string("chr_document_number", 30);
            $table->integer('age');
            $table->decimal('weight');
            $table->decimal('height');

            $table->text("physician_notes");

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
        Schema::dropIfExists('diagnosis');
    }

}
