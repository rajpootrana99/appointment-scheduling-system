<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyerInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lawyer_type_id');
            $table->unsignedBigInteger('user_id');
            $table->string('cnic');
            $table->string('address');
            $table->string('city');
            $table->string('education');
            $table->string('passing_year');
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
        Schema::dropIfExists('lawyer_information');
    }
}
