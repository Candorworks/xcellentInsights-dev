<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\CMSSeeder;
use Database\Seeders\LeadTypesSeeder;
use Database\Seeders\LicenceTypesSeeder;
use Database\Seeders\PublisherSeeder;
use Database\Seeders\RolesSeeder;
use Database\Seeders\StateSeeder;
use Database\Seeders\PermissionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            CountrySeeder::class,
            CMSSeeder::class,
            LeadTypesSeeder::class,
            LicenceTypesSeeder::class,
            PublisherSeeder::class,
            RolesSeeder::class,
            StateSeeder::class,
            PermissionsSeeder::class,
        ]);
    }
}
