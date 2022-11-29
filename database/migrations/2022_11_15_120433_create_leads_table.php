<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->integer('report_id')->nullable();
            $table->string('name' , 100);
            $table->string('email' , 100);
            $table->string('website' , 100)->nullable();
            $table->string('country' , 100)->nullable();
            $table->bigInteger('number');
            $table->text('description', 255);
            $table->string('company' , 100);
            $table->string('job_title' , 100);
            $table->string('report_no' , 10)->nullable();
            $table->string('new_publications' , 10)->nullable();
            $table->string('ip' , 100)->nullable();
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
        Schema::dropIfExists('leads');
    }
}
