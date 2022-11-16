<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leadtypes')->truncate();

        $leadtypes = array(
            array("name" => "speak With Us"),
            array("name" => "Get in Touch"),
            array("name" => "Become a Partner"),
            array("name" => "Enquiry Form"),
            array("name" => "Contact Us"),
            array("name" => "Speak with Analyst"),
            array("name" => "Enquiry before Buying"),
            array("name" => "Request Sample"),
            array("name" => "Check For Discount"),
        );


        DB::table('leadtypes')->insert($leadtypes);
    }
}
