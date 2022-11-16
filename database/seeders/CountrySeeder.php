<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();

        $country = [
            ['name' => 'India', 'sort_name' => 'IN'],
            ['name' => 'India', 'sort_name' => 'IN'],
            ['name' => 'India', 'sort_name' => 'IN'],
            ['name' => 'India', 'sort_name' => 'IN'],
            ['name' => 'India', 'sort_name' => 'IN'],
            ['name' => 'India', 'sort_name' => 'IN'],
        ];

        countries::create($country);
    }
}
