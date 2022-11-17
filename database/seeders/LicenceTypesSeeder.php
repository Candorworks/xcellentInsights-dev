<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenceTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('licences_types')->truncate();

        $licences_types = array(
            array("name" => "Single User license"),
            array("name" => "Multi User license"),
            array("name" => "Enterprise license"),
        );

        DB::table('licences_types')->insert($licences_types);
    }
}
