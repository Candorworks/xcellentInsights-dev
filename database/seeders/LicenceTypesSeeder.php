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
        DB::table('licence_types')->truncate();

        $licence_types = array(
            array("name" => "Single User license"),
            array("name" => "Multi User license"),
            array("name" => "Enterprise license"),
        );

        DB::table('licence_types')->insert($licence_types);
    }
}
