<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescribedExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescribed_exams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default('Not Done');
            $table->string('result');
            $table->longText('observation');
            $table->foreignId('consultation_id')->constrained('consultations');
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
        Schema::dropIfExists('prescribed_exams');
    }
}
