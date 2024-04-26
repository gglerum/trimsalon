<?php
namespace App\Services;

use App\Models\Owner;
use App\Repositories\OwnerRepository;

class OwnerService
{
    public function __construct(
        private OwnerRepository $ownerRepository
    ) {
    }
    /**
     * @param array<string,mixed> $data
     * @return void
     */
    public function create(array $data): Owner
    {
        $owner = $this->ownerRepository->findByEmail($data['email']);
        if (!$owner) {
            $owner = $this->ownerRepository->create($data);
        }
        return $owner;
    }
}