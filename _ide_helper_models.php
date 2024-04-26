<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $pet_id
 * @property \Illuminate\Support\Carbon $appointment_at
 * @property string|null $note
 * @property-read \App\Models\Owner|null $owner
 * @property-read \App\Models\Pet $pet
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Treatment> $treatments
 * @property-read int|null $treatments_count
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereAppointmentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment wherePetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereUpdatedAt($value)
 */
	class Appointment extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $appointment_id
 * @property int $treatment_id
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTreatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTreatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTreatment query()
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTreatment whereAppointmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTreatment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTreatment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTreatment whereTreatmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentTreatment whereUpdatedAt($value)
 */
	class AppointmentTreatment extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $street
 * @property string|null $house_number
 * @property string|null $postal_code
 * @property string|null $city
 * @property string|null $phone_number
 * @property string $email
 * @method static \Database\Factories\OwnerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Owner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereHouseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereUpdatedAt($value)
 */
	class Owner extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property int $species_id
 * @property string $breed
 * @property int $owner_id
 * @property string|null $description
 * @property-read \App\Models\Species $species
 * @method static \Database\Factories\PetFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pet whereBreed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pet whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pet whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pet whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pet whereSpeciesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pet whereUpdatedAt($value)
 */
	class Pet extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $pet_id
 * @property int $appointment_id
 * @method static \Illuminate\Database\Eloquent\Builder|PetAppointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PetAppointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PetAppointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|PetAppointment whereAppointmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PetAppointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PetAppointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PetAppointment wherePetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PetAppointment whereUpdatedAt($value)
 */
	class PetAppointment extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Species newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Species newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Species query()
 * @method static \Illuminate\Database\Eloquent\Builder|Species whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Species whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Species whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Species whereUpdatedAt($value)
 */
	class Species extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $species_id
 * @property string $name
 * @property string|null $description
 * @property float $price
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereSpeciesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedAt($value)
 */
	class Treatment extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

