<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->string('order_id' , 200);
            $table->integer('report_id');
            $table->string('name' , 255);
            $table->string('email' , 255);
            $table->bigInteger('number');
            $table->string('country' , 255);
            $table->string('company' , 255);
            $table->string('job_title' , 255);
            $table->string('address' , 255);
            $table->string('city' , 255);
            $table->string('state' , 255);
            $table->integer('zip');
            $table->string('payment_method' , 255);
            $table->string('plan' , 255);
            $table->integer('plan_price');
            $table->integer('discount_price');
            $table->integer('final_price');
            $table->string('payment_status' , 255);
            $table->string('remark' , 255);
            $table->enum('active', ['1', '0']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
