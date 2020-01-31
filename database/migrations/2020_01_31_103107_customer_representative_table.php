<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerRepresentativeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_representative', function (Blueprint $table) {
            Schema::dropIfExists('customer_representative');
            $table->string('customerID', 30);
            $table->string('persion_in_change_ID', 20);
            $table->string('fullname', 100);
            $table->string('email', 100);
            $table->string('direct_telephone_number', 15);
            $table->string('department_name', 200);
            $table->string('position', 100);
            $table->integer('internal_memo', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_representative');
    }
}
