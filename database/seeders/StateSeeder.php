<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('states')->truncate();

         $states = array(
            array("name" => "Andhra Pradesh", "sort_name" => "AP"),
            array("name" => "Arunachal Pradesh", "sort_name" => "AR"),
            array("name" => "Assam", "sort_name" => "AS"),
            array("name" => "Bihar", "sort_name" => "BR"),
            array("name" => "Chhattisgarh", "sort_name" => "CT"),
            array("name" => "Goa", "sort_name" => "GA"),
            array("name" => "Gujarat", "sort_name" => "GJ"),
            array("name" => "Haryana", "sort_name" => "HR"),
            array("name" => "Himachal Pradesh", "sort_name" => "HP"),
            array("name" => "Jammu and Kashmir", "sort_name" => "JK"),
            array("name" => "Jharkhand", "sort_name" => "JH"),
            array("name" => "Karnataka", "sort_name" => "KA"),
            array("name" => "Kerala", "sort_name" => "KL"),
            array("name" => "Ladakh", "sort_name" => "LA"),
            array("name" => "Madhya Pradesh", "sort_name" => "MP"),
            array("name" => "Maharashtra", "sort_name" => "MH"),
            array("name" => "Manipur", "sort_name" => "MN"),
            array("name" => "Meghalaya", "sort_name" => "ML"),
            array("name" => "Mizoram", "sort_name" => "MZ"),
            array("name" => "Nagaland", "sort_name" => "NL"),
            array("name" => "Odisha", "sort_name" => "OR"),
            array("name" => "Punjab", "sort_name" => "PB"),
            array("name" => "Rajasthan", "sort_name" => "RJ"),
            array("name" => "Sikkim", "sort_name" => "SK"),
            array("name" => "Tamil Nadu", "sort_name" => "TN"),
            array("name" => "Telangana", "sort_name" => "TS"),
            array("name" => "Tripura", "sort_name" => "TR"),
            array("name" => "Uttarakhand", "sort_name" => "UK"),
            array("name" => "Uttar Pradesh", "sort_name" => "UP"),
            array("name" => "West Bengal", "sort_name" => "WB"),
            array("name" => "Andaman and Nicobar Islands", "sort_name" => "AN"),
            array("name" => "Chandigarh", "sort_name" => "CH"),
            array("name" => "Dadra and Nagar Haveli", "sort_name" => "DN"),
            array("name" => "Daman and Diu", "sort_name" => "DD"),
            array("name" => "Delhi", "sort_name" => "DL"),
            array("name" => "Lakshadeep", "sort_name" => "LD"),
            array("name" => "Pondicherry", "sort_name" => "PY")
          );
         DB::table('states')->insert($states);
    }
}
