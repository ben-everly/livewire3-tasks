<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    /** @return BelongsTo<Status> */
    public function status() : BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
