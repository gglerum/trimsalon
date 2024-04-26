<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pet extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'species_id', 'breed', 'owner_id'];

    /**
     * Get the Species associated with the Pet.
     */
    public function species(): BelongsTo
    {
        return $this->belongsTo(Species::class);
    }
}
