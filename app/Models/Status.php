<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Status extends Model
{
    use HasFactory;

    /** @return BelongsTo<Team> */
    public function team() : BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
