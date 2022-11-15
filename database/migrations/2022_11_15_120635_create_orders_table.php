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
            $table->char('order_id' , 200);
            $table->integer('report_id');
            $table->char('name' , 255);
            $table->char('email' , 255);
            $table->bigInteger('number');
            $table->char('country' , 255);
            $table->char('company' , 255);
            $table->char('job_title' , 255);
            $table->char('address' , 255);
            $table->char('city' , 255);
            $table->char('state' , 255);
            $table->integer('zip');
            $table->char('payment_method' , 255);
            $table->char('plan' , 255);
            $table->integer('plan_price');
            $table->integer('discount_price');
            $table->integer('final_price');
            $table->char('payment_status' , 255);
            $table->char('remark' , 255);
            $table->enum('active', ['1', '0']);
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
