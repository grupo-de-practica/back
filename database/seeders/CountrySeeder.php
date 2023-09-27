<?php

namespace Database\Seeders;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    private array $lstCountryNames = ["Argentina", "Bolivia", "Brasil", "Chile", "Colombia", "Costa Rica", "Cuba", "Ecuador", "El Salvador", "Guatemala", "Guyana", "Haití", "Honduras", "México", "Nicaragua", "Panamá", "Paraguay", "Perú", "República Dominicana", "Surinam", "Uruguay", "Venezuela"];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->lstCountryNames as $name) {
            Country::create([
                'name' => $name
            ]);
        }
    }
}
