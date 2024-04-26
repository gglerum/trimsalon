<?php
namespace Tests\Feature;

use App\Models\Owner;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Types\Species;

class PetServiceTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function testPetService(): void
    {
        $owner = Owner::factory()->create();

        $petData = [
            'name' => 'Charlie',
            'breed' => $this->faker->word(),
            'species_id' => Species::Dog->value,
            'owner_id' => $owner->id,
        ];
        $pet = app(\App\Services\PetService::class)->create($petData, $owner->id);

        $this->assertModelExists($pet);
        $this->assertEquals($pet->name, $petData['name']);
    }
}