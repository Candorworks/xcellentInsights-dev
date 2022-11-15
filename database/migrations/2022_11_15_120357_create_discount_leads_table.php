<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount_leads', function (Blueprint $table) {
            $table->id();
            $table->char('report_id' , 255);
            $table->char('email', 255);
            $table->char('plan', 50);
            $table->char('link', 255);
            $table->char('status', 50);
            $table->char('type', 20);
            $table->integer('discount_value');
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
        Schema::dropIfExists('discount_leads');
    }
}
