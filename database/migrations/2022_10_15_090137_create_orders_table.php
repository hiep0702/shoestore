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
            $table->unsignedBigInteger('customer_id'); 
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->unsignedBigInteger('shipping_id'); 
            $table->foreign('shipping_id')->references('id')->on('shippings');
            $table->unsignedBigInteger('payment_id'); 
            $table->foreign('payment_id')->references('id')->on('payments');          
            $table->float('total');
            $table->integer('status');
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
