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
            $table->string('unique_id', 20);
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('publisher_id');
            $table->string('title', 255);
            $table->string('meta_title', 255);
            $table->text('meta_desc');
            $table->string('url_title', 255);
            $table->string('slug', 255);
            $table->tinyInteger('top_selling');
            $table->string('thumbnail', 255);
            $table->string('format', 20);
            $table->string('sample_pdf', 255);
            $table->string('pdf', 255);
            $table->string('single_price', 50);
            $table->string('multi_price', 50);
            $table->string('enterprise_price', 50);
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
