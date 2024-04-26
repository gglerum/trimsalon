<?php

namespace Database\Seeders;

use App\Models\Treatment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $treatments = [
            ['species_id' => 1, 'name' => 'Wassen', 'description' => 'Wassen van de hond', 'price' => 15.0],
            ['species_id' => 1, 'name' => 'Knippen', 'description' => 'Knippen van de hond', 'price' => 25.0],
            ['species_id' => 1, 'name' => 'Wassen & Knippen', 'description' => 'Wassen en knippen van de hond', 'price' => 35.0],
            ['species_id' => 1, 'name' => 'Scheren', 'description' => 'Scheren van de vacht van de hond', 'price' => 20],
            ['species_id' => 1, 'name' => 'Nagels trimmen', 'description' => 'trimmen van de nagels van de hond', 'price' => 10.0],
            ['species_id' => 2, 'name' => 'Wassen', 'description' => 'Wassen van de kat', 'price' => 15.0],
            ['species_id' => 2, 'name' => 'Scheren', 'description' => 'Scheren van de vacht van de kat', 'price' => 20],
            ['species_id' => 2, 'name' => 'Nagels trimmen', 'description' => 'trimmen van de nagels van de kat', 'price' => 10.0],
            ['species_id' => 3, 'name' => 'Wassen', 'description' => 'Wassen van de papagaai', 'price' => 10.0],
            ['species_id' => 3, 'name' => 'Vijlen snavel', 'description' => 'Vijlen van de snavel van de papagaai', 'price' => 5.0],
            ['species_id' => 3, 'name' => 'Nagels trimmen', 'description' => 'trimmen van de nagels van de papagaai', 'price' => 10.0],
            ['species_id' => 4, 'name' => 'Wassen', 'description' => 'Wassen van het konijn', 'price' => 10.0],
            ['species_id' => 4, 'name' => 'Nagels trimmen', 'description' => 'trimmen van de nagels van het konijn', 'price' => 5.0],
        ];

        Treatment::insert($treatments);
    }
}
