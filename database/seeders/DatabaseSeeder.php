<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->truncateTables(['users','rols', 'properties', 'images', 'property_features', 'zones','zone_types', 'countries', 'provinces', 'cities']);

        $this->call([RoleSeeder::class,
                     ZoneTypeSeeder::class,
                     PropertySeeder::class, 
                     ZoneSeeder::class,
                     ImageSeeder::class,
                     CountrySeeder::class,
                     ProvinceSeeder::class,
                     CitySeeder::class]);
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
