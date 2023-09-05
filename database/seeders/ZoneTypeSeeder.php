<?php

namespace Database\Seeders;

use App\Models\ZoneType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ZoneTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ZoneType::create([
            'name' => 'transporte',
        ]);

        ZoneType::create([
            'name' => 'comercios',
        ]);

        ZoneType::create([
            'name' => 'salud',
        ]);

        ZoneType::create([
            'name' => 'educacion',
        ]);
    }
}
