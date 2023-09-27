<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->truncateTables(['users','rols', 'properties', 'images', 'property_features', 'zones','zone_types', 'countries', 'provinces']);

        $this->call([RoleSeeder::class,
                     ZoneTypeSeeder::class,
                     PropertySeeder::class, 
                     ZoneSeeder::class,
                     ImageSeeder::class,
                     CountrySeeder::class,
                     ProvinceSeeder::class]);
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
