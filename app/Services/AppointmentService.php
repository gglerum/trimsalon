<?php

namespace App\Services;

use App\Mail\AppointmentCreated;
use App\Models\Appointment;
use App\Models\Owner;
use App\Models\Pet;
use App\Repositories\AppointmentRepository;
use Illuminate\Support\Facades\Mail;

class AppointmentService
{
    public function __construct(
        private AppointmentRepository $appointmentRepository
    ) {
    }
    /**
     * @param array<string,mixed> $data
     * @param array<int,int> $treatments
     * @return Appointment
     */
    public function create(array $data, Owner $owner, Pet $pet, array $treatments): Appointment
    {
        //validate input
        if (empty($data)) {
            throw new \InvalidArgumentException('Data cannot be empty');
        }
        if (empty($treatments)) {
            throw new \InvalidArgumentException('One or more treatments need to be selected');
        }

        //add pet id to data to save appointment
        $data['pet_id'] = $pet->id;
        $appointment = $this->appointmentRepository->create($data);
        //attach treatments
        $appointment->treatments()->attach($treatments);

        //send confirmation email to pet owner
        Mail::to($owner->email)->send(new AppointmentCreated($appointment, $owner, $pet));

        return $appointment;
    }
}