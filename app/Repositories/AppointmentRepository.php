<?php

namespace App\Repositories;

use App\Models\Appointment;
use Illuminate\Support\Facades\Log;

class AppointmentRepository
{
    /**
     * Create a new appointment.
     *
     * @param array $data The appointment data.
     * @return Appointment The created appointment.
     */
    public static function create(array $data): Appointment
    {
        return Appointment::create($data);
    }

    /**
     * Update an existing appointment.
     *
     * @param Appointment $appointment The appointment to update.
     * @param array $data The updated appointment data.
     * @return bool True if the update was successful, false otherwise.
     */
    public static function update(Appointment $appointment, array $data): bool
    {
        return $appointment->update($data);
    }

    /**
     * Delete an appointment.
     *
     * @param Appointment $appointment The appointment to delete.
     * @return bool True if the deletion was successful, false otherwise.
     */
    public static function delete(Appointment $appointment): bool
    {
        try {
            return $appointment->delete();
        } catch (\LogicException $e) {
            Log::error($e->getMessage());
        }
        return false;
    }
}