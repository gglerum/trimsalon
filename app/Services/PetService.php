<?php
namespace App\Services;

use App\Models\Pet;
use App\Repositories\PetRepository;
use App\Types\Species;

class PetService
{
    public function __construct(
        private PetRepository $petRepository
    ) {
    }
    /**
     * @param array<string,mixed> $data the data to create the pet
     * @param int $ownerId the id of the owner
     * @return Pet the pet that was created
     */
    public function create(array $data, int $ownerId): Pet
    {
        $pet = $this->petRepository->findByFuzzySearch(Species::from($data['species_id']), $data['name'], $ownerId);
        if (!$pet) {
            $pet = $this->petRepository->create($data);
        }

        return $pet;
    }
}