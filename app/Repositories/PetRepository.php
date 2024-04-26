<?php
namespace App\Repositories;

use App\Models\Pet;
use App\Types\Species;

class PetRepository
{
    /**
     * @param array<int,mixed> $data
     */
    public function create(array $data): Pet
    {
        return Pet::create($data);
    }

    public function findByFuzzySearch(Species $species, string $name, int $ownerId): Pet|null
    {
        return Pet::where('species_id', $species)
            ->where('name', 'like', '%' . $name . '%')
            ->where('owner_id', $ownerId)
            ->first();
    }
}