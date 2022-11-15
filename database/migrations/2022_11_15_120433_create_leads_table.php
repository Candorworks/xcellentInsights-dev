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
            $table->char('name' , 100);
            $table->char('email' , 100);
            $table->char('website' , 100);
            $table->char('country' , 100);
            $table->bigInteger('number');
            $table->string('description', 255);
            $table->char('company' , 100);
            $table->char('job_title' , 100);
            $table->char('report_no' , 10);
            $table->char('new_publications' , 10);
            $table->char('ip' , 100);
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
