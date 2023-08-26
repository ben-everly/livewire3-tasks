<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected function number(): Attribute
    {
        return Attribute::make(
            get: fn () => self::where('team_id', $this->team_id)
                ->where('id', '<=', $this->id)
                ->count(),
        );
    }

    /** @return BelongsTo<Status> */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    /** @return BelongsTo<Team> */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
