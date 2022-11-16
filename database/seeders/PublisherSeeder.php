<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->truncate();

        $publishers = array(
            array("name" => "HNY  Research" , "sort_name"=>"HNY"),
            array("name" => "Gen Consulting Company" , "sort_name"=>"GCC"),
            array("name" => "QY Research" , "sort_name"=>"QYR"),
        );

        DB::table('publishers')->insert($publishers);
    }
}
