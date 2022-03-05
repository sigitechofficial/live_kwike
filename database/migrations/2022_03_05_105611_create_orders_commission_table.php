<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersCommissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_commission', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->string('admin_commission_percentage')->default(0);
            $table->string('retailer_commission_percentage')->default(0);
            $table->string('driver_commission_percentage')->default(0);
            $table->double('admin_commission')->default(0);
            $table->double('retailer_commission')->default(0);
            $table->double('driver_commission')->default(0);
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
        Schema::dropIfExists('orders_commission');
    }
}
