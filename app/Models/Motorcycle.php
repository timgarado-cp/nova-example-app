<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Motorcycle extends Model
{
    use HasFactory, SoftDeletes;

    public function brand() : BelongsTo 
    {
        return $this->belongsTo(Brand::class);
    }

    public function category() : BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }

    public function user() : BelongsToMany 
    {
        return $this->belongsToMany(User::class);
    }
}
