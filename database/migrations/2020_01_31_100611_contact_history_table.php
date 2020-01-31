<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_history', function (Blueprint $table) {
            Schema::dropIfExists('contact_history');
            $table->string('customerID', 30);
            $table->string('overview', 30);
            $table->string('content', 200);
            $table->datetime('contact_date_and_time');
            $table->integer('status');
            $table->string('order_accuracy', 100);
            $table->string('persion_in_change_ID', 20);
            $table->string('sales_staffID', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_history');
    }
}
