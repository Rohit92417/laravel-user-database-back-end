<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name',50)->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->integer('age')->nullable(false);
            $table->integer('salary')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_data');
    }
}
