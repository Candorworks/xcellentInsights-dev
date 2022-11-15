<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRssDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rss_data', function (Blueprint $table) {
            $table->id();
            $table->char('title' ,500);
            $table->enum('active', ['1', '0']);
            $table->char('url' ,500);
            $table->text('description');
            $table->longText('pr');
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
        Schema::dropIfExists('rss_data');
    }
}
