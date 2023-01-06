<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leadtypes')->truncate();

        $permissions = array(
            array('id' => '1','name' => 'subadmin-list','guard_name' => 'web','created_at' => '2022-03-09 04:15:55','updated_at' => '2022-03-09 04:15:56'),
            array('id' => '2','name' => 'subadmin-create','guard_name' => 'web','created_at' => '2022-03-09 04:15:55','updated_at' => '2022-03-09 04:15:56'),
            array('id' => '3','name' => 'subadmin-edit','guard_name' => 'web','created_at' => '2022-03-09 04:15:55','updated_at' => '2022-03-09 04:15:56'),
            array('id' => '4','name' => 'subadmin-delete','guard_name' => 'web','created_at' => '2022-03-09 04:15:55','updated_at' => '2022-03-09 04:15:56'),
            array('id' => '5','name' => 'role-list','guard_name' => 'web','created_at' => '2022-03-09 04:50:00','updated_at' => '2022-03-09 04:50:00'),
            array('id' => '6','name' => 'role-create','guard_name' => 'web','created_at' => '2022-03-09 04:50:14','updated_at' => '2022-03-09 04:50:14'),
            array('id' => '7','name' => 'role-edit','guard_name' => 'web','created_at' => '2022-03-09 04:50:25','updated_at' => '2022-03-09 04:50:25'),
            array('id' => '8','name' => 'role-delete','guard_name' => 'web','created_at' => '2022-03-09 04:50:36','updated_at' => '2022-03-09 04:50:36'),
            array('id' => '9','name' => 'permissions-list','guard_name' => 'web','created_at' => '2022-03-09 04:50:50','updated_at' => '2022-03-09 04:50:50'),
            array('id' => '10','name' => 'permissions-create','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '11','name' => 'permissions-edit','guard_name' => 'web','created_at' => '2022-03-09 04:51:12','updated_at' => '2022-03-09 04:51:12'),
            array('id' => '12','name' => 'permissions-delete','guard_name' => 'web','created_at' => '2022-03-09 04:51:22','updated_at' => '2022-03-09 04:51:22'),
            array('id' => '14','name' => 'category-list','guard_name' => 'web','created_at' => '2022-03-09 04:50:50','updated_at' => '2022-03-09 04:50:50'),
            array('id' => '16','name' => 'category-create','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '17','name' => 'category-edit','guard_name' => 'web','created_at' => '2022-03-09 04:51:12','updated_at' => '2022-03-09 04:51:12'),
            array('id' => '18','name' => 'category-delete','guard_name' => 'web','created_at' => '2022-03-09 04:51:22','updated_at' => '2022-03-09 04:51:22'),
            array('id' => '19','name' => 'publisher-list','guard_name' => 'web','created_at' => '2022-03-09 04:50:50','updated_at' => '2022-03-09 04:50:50'),
            array('id' => '20','name' => 'publisher-create','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '21','name' => 'publisher-edit','guard_name' => 'web','created_at' => '2022-03-09 04:51:12','updated_at' => '2022-03-09 04:51:12'),
            array('id' => '22','name' => 'publisher-delete','guard_name' => 'web','created_at' => '2022-03-09 04:51:22','updated_at' => '2022-03-09 04:51:22'),
            array('id' => '24','name' => 'career-list','guard_name' => 'web','created_at' => '2022-03-09 04:51:22','updated_at' => '2022-03-09 04:51:22'),
            array('id' => '25','name' => 'jobs-list','guard_name' => 'web','created_at' => '2022-03-09 04:51:22','updated_at' => '2022-03-09 04:51:22'),
            array('id' => '26','name' => 'jobs-create','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '27','name' => 'jobs-edit','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '28','name' => 'jobs-delete','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '30','name' => 'report-list','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '31','name' => 'report-create','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '32','name' => 'report-bulk-report','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '33','name' => 'report-edit','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '34','name' => 'report-delete','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '36','name' => 'discount-create','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '37','name' => 'discount-list','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '38','name' => 'discount-edit','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '41','name' => 'lead-reportsRelated','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '42','name' => 'lead-partner','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '43','name' => 'lead-forms','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '44','name' => 'order-list','guard_name' => 'web','created_at' => '2022-03-09 04:51:01','updated_at' => '2022-03-09 04:51:01'),
            array('id' => '45','name' => 'newsletter-list','guard_name' => 'web','created_at' => NULL,'updated_at' => NULL),
            array('id' => '46','name' => 'ollalola','guard_name' => 'web','created_at' => '2022-12-15 13:45:13','updated_at' => '2022-12-15 13:45:13')
        );
        
        DB::table('permissions')->insert($permissions);
    
    }
}
