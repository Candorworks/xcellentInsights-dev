<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->string('unique_id', 20)->nullable();
            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->string('title', 255)->nullable();
            $table->string('meta_title', 255)->nullable();
            $table->text('meta_desc')->nullable();
            $table->string('url_title', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->tinyInteger('top_selling')->default(0);
            $table->string('thumbnail', 255)->default('images/reports/default.jpg');
            $table->string('format', 20)->nullable()->default('pdf');
            $table->string('sample_pdf', 255)->nullable();
            $table->string('pdf', 255)->nullable();
            $table->string('single_price', 50)->nullable()->default(0);
            $table->string('multi_price', 50)->nullable()->default(0);
            $table->string('enterprise_price', 50)->nullable()->default(0);
            $table->integer('pages')->nullable()->default(0);
            $table->longText('description')->nullable();
            $table->longText('toc')->nullable();
            $table->longText('table_figures')->nullable();
            $table->text('companies')->nullable();
            $table->text('keywords')->nullable();
            $table->dateTime('publish', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('active', ['0', '1', '2'])->default('1');
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
        Schema::dropIfExists('reports');
    }
}
