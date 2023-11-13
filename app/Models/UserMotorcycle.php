<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserMotorcycle extends Model
{
    use HasFactory;

    public function motorcycle() : BelongsTo
    {
        return $this->belongsTo(Motorcycle::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
