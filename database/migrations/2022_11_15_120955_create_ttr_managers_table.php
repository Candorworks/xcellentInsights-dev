<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTtrManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttr_managers', function (Blueprint $table) {
            $table->id();
            $table->char('email', 100);
            $table->char('password', 100);
            $table->char('username', 100);
            $table->char('active', 100);
            $table->timestamp('last_login', $precision = 0);
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
        Schema::dropIfExists('ttr_managers');
    }
}
