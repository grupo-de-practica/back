<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Arr;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Argentina
        foreach ($this->lstProvinciasArg as $nameProvince) {
            Province::create(['country_id' => 1,'name' => $nameProvince ]);
        }
        // Chile
        foreach ($this->lstProvinciasChile as $nameProvince) {
            Province::create(['country_id' => 4,'name' => $nameProvince ]);
        }
        // Brasil
        foreach ($this->lstProvinciasBrasil as $nameProvince) {
            Province::create(['country_id' => 3,'name' => $nameProvince ]);
        }
         // Uruguay
        foreach ($this->lstProvinciasUruguay as $nameProvince) {
            Province::create(['country_id' => 21,'name' => $nameProvince ]);
        }

    }

    private array $lstProvinciasArg =  [
        "Buenos Aires",
        "Catamarca",
        "Chaco",
        "Chubut",
        "Córdoba",
        "Corrientes",
        "Entre Ríos",
        "Formosa",
        "Jujuy",
        "La Pampa",
        "La Rioja",
        "Mendoza",
        "Misiones",
        "Neuquén",
        "Río Negro",
        "Salta",
        "San Juan",
        "San Luis",
        "Santa Cruz",
        "Santa Fe",
        "Santiago del Estero",
        "Tierra del Fuego",
    ];

    private array $lstProvinciasChile = [
        "Arica y Parinacota",
        "Tarapaca",
        "Antofagasta",
        "Atacama",
        "Coquimbo",
        "Valparaiso",
        "O'Higgins",
        "Maule",
        "Ñuble",
        "Biobío",
        "La Araucanía",
        "Los Ríos",
        "Los Lagos",
        "Ibáñez del Campo",
        "Magallanes y de la Antártica Chilena",
        "Metropolitana de Santiago",
    ];

    private array $lstProvinciasBrasil = [
        "Acre",
        "Alagoas",
        "Amapá",
        "Amazonas",
        "Bahia",
        "Ceará",
        "Distrito Federal",
        "Espírito Santo",
        "Goiás",
        "Maranhão",
        "Mato Grosso",
        "Mato Grosso do Sul",
        "Minas Gerais",
        "Pará",
        "Paraíba",
        "Paraná",
        "Pernambuco",
        "Piauí",
        "Rio de Janeiro",
        "Rio Grande do Norte",
        "Rio Grande do Sul",
        "Rondônia",
        "Roraima",
        "Santa Catarina",
        "São Paulo",
        "Sergipe",
    ];

    private array $lstProvinciasUruguay = [
        "Artigas",
        "Canelones",
        "Cerro Largo",
        "Colonia",
        "Durazno",
        "Flores",
        "Florida",
        "Lavalleja",
        "Maldonado",
        "Montevideo",
        "Paysandú",
        "Río Negro",
        "Rivera",
        "Rocha",
        "Salto",
        "San José",
        "Soriano",
        "Tacuarembó",
        "Treinta y Tres",
    ];
}
