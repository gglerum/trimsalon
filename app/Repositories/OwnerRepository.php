<?php
namespace App\Repositories;

use App\Models\Owner;

class OwnerRepository
{
    /**
     * @param array<string,mixed> $data
     */
    public function create(array $data): Owner
    {
        return Owner::create($data);
    }

    public function findByEmail(string $email): Owner|null
    {
        return Owner::where('email', $email)->first();
    }
}