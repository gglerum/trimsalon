<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Appointment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['pet_id', 'appointment_at'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime:Y-m-d',
            'appointment_at' => 'datetime:d-m-Y H:i',
        ];
    }

    /**
     * Get the Pet associated with the Appointment.
     */
    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }

    /**
     * Get the owner associated with the Appointment.
     */
    public function owner(): HasOneThrough
    {
        return $this->hasOneThrough(Owner::class, Pet::class);
    }

    /**
     * Get the treatments associated with the appointment.
     */
    public function treatments(): BelongsToMany
    {
        return $this->belongsToMany(Treatment::class);
    }
}
