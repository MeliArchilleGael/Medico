<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescribedDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescribed_drugs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('observation');
            $table->string('status')->default('Not Buy');
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
        Schema::dropIfExists('prescribed_drugs');
    }
}
