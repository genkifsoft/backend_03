<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmployeeMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_master', function (Blueprint $table) {
            Schema::dropIfExists('employee_master');
            $table->string('employeeID', 30);
            $table->string('fullname', 100);
            $table->string('email', 100);
            $table->string('password', 100);
            $table->string('department_name', 200);
            $table->string('position', 100);
            $table->integer('permission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_master');
    }
}
