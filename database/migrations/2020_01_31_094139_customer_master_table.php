<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_master', function (Blueprint $table) {
            Schema::dropIfExists('customer_master');
            $table->string('customerID', 30);
            $table->string('postal_code', 30);
            $table->string('address', 200);
            $table->string('representative_telephone_number', 15);
            $table->string('fax_number', 30);
            $table->string('url', 100);
            $table->integer('internal_memo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_master');
    }
}
