<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OwnerServiceTest extends TestCase
{
    use WithFaker;

    public function testOwnerService(): void
    {
        $ownerData = [
            'name' => $this->faker->name(),
            'street' => $this->faker->streetName(),
            'house_number' => $this->faker->buildingNumber(),
            'postal_code' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'phone_number' => $this->faker->phoneNumber(),
            'email' => 'test@example.com',
        ];
        $owner = app(\App\Services\OwnerService::class)->create($ownerData);

        $this->assertModelExists($owner);
        $this->assertEquals($owner->email, $ownerData['email']);
    }
}