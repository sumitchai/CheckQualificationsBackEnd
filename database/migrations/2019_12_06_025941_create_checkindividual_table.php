<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckindividualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkindividual', function (Blueprint $table) { 
            $table->bigIncrements('id');
            $table->string('NAME')->nullable();
            $table->string('STUDENT_CODE')->nullable();
            $table->string('CITIZEN_ID')->nullable();
            $table->string('companyname');
            $table->string('namecheck');
            $table->string('Objective');
            $table->string('Objective_1')->nullable();
            $table->string('department');
            $table->string('department_1')->nullable();
            $table->string('e_mail');
            $table->string('phone_number');
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
        Schema::dropIfExists('checkindividual');
    }
}
