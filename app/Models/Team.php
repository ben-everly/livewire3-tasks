<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    /** @return HasMany<Status> */
    public function statuses() : HasMany
    {
        return $this->hasMany(Status::class);
    }
}
