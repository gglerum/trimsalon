<?php
namespace Tests\Feature;

use App\Mail\AppointmentCreated;
use App\Models\Owner;
use App\Models\Pet;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class AppointmentServiceTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    private function createDependencies(): array
    {
        //create random owner and pet for testing
        $owner = Owner::factory()->create();
        $pet = Pet::factory()->create([
            'owner_id' => $owner->id
        ]);
        return [
            'owner' => $owner,
            'pet' => $pet
        ];
    }

    public function testAppointmentService(): void
    {
        extract($this->createDependencies());

        //make sure no real email will be sent
        Mail::fake();

        //create appointment
        $appointment = app(\App\Services\AppointmentService::class)->create(
            data: [
                'appointment_at' => '2021-10-10 10:00:00',
                'note' => $this->faker->sentences(4, true),
            ],
            treatments: [1, 2, 3],
            owner: $owner,
            pet: $pet
        );

        //assertions
        $this->assertModelExists($appointment);

        Mail::assertSent(AppointmentCreated::class, function (AppointmentCreated $mail) use ($owner, $pet) {
            return $mail->hasTo($owner->email) &&
                $mail->assertSeeInHtml($pet->name) &&
                $mail->assertSeeInHtml($owner->name);
        });
    }

    public function testAppointmentCanBeCreatedWithoutNote()
    {
        extract($this->createDependencies());

        //create appointment
        $appointment = app(\App\Services\AppointmentService::class)->create(
            data: [
                'appointment_at' => '2021-10-10 10:00:00',
            ],
            treatments: [1, 2, 3],
            owner: $owner,
            pet: $pet
        );

        //assertions
        $this->assertModelExists($appointment);
    }

    public function testAppointmentCanNotBeCreatedWithoutAppointmentData()
    {
        extract($this->createDependencies());

        //create appointment
        $appointment = app(\App\Services\AppointmentService::class)->create(
            data: [],
            treatments: [1, 2, 3],
            owner: $owner,
            pet: $pet
        );

        //assertions
        $this->assertModelExists($appointment);
    }
}
