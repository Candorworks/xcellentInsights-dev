<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->integer('lead_type');
            $table->integer('report_id');
            $table->string('name' , 100);
            $table->string('email' , 100);
            $table->string('website' , 100);
            $table->string('country' , 100);
            $table->bigInteger('number');
            $table->text('description', 255);
            $table->string('company' , 100);
            $table->string('job_title' , 100);
            $table->string('report_no' , 10);
            $table->string('new_publications' , 10);
            $table->string('ip' , 100);
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
        Schema::dropIfExists('leads');
    }
}
