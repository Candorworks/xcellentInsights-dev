<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();

        $roles = array(
            array("name" => "Admin" , "guard_name"=>"web"),
            array("name" => "Manager" , "guard_name"=>"web"),
            array("name" => "Test" , "guard_name"=>"web"),
            array("name" => "Super Admin" , "guard_name"=>"web"),
            array("name" => "Upload Manager" , "guard_name"=>"web"),
            array("name" => "Sales Executive" , "guard_name"=>"web"),
        );

        DB::table('roles')->insert($roles);
    }
}
