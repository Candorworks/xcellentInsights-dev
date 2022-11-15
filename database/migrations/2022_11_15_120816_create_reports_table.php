<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->char('unique_id', 20);
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('publisher_id');
            $table->char('title', 255);
            $table->char('meta_title', 255);
            $table->text('meta_desc');
            $table->char('url_title', 255);
            $table->char('slug', 255);
            $table->tinyInteger('top_selling');
            $table->char('thumbnail', 255);
            $table->char('format', 20);
            $table->char('sample_pdf', 255);
            $table->char('pdf', 255);
            $table->char('single_price', 50);
            $table->char('multi_price', 50);
            $table->char('enterprise_price', 50);
            $table->integer('pages');
            $table->longText('description');
            $table->longText('toc');
            $table->longText('tablefigures');
            $table->text('companies');
            $table->text('keywords');
            $table->dateTime('publish', $precision = 0);
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
        Schema::dropIfExists('reports');
    }
}
