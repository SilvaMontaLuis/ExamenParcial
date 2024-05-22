<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Vehiculo;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 100; $i++) {
            Vehiculo::create([
                'placa' => $faker->unique()->randomNumber(7), // Genera una placa única de 7 dígitos
                'modelo' => $faker->word, // Genera un nombre de modelo aleatorio
                'propietario' => $faker->name, // Genera un nombre de propietario aleatorio
            ]);
        }
    }
}
