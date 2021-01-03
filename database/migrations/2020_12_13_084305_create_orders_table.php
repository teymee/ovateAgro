<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('orderId');
            $table->string('userId');
            $table->string('fullname');
            $table->string('phone');
            $table->string('email');
            $table->string('state');
            $table->string('shipping_cost');
            $table->string('city');
            $table->mediumText('address');
            $table->mediumText('extra')->nullable();
            $table->string('status')->default('request');
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
        Schema::dropIfExists('orders');
    }
}
