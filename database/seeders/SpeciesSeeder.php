<?php

namespace Database\Seeders;

use App\Models\Species;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $species = [
            ['name' => 'Hond'],
            ['name' => 'Kat'],
            ['name' => 'Papagaai'],
            ['name' => 'Konijn'],
        ];

        Species::insert($species);
    }
}
