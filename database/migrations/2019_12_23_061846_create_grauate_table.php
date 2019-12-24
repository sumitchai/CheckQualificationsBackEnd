<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrauateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grauate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NAME_TH');
            $table->string('STUDENT_CODE');
            $table->string('DEGREE_NAME_TH');
            $table->date('GRAVATE_DATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grauate');
    }
}
